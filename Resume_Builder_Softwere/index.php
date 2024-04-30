<?php
    require('dn_lib/load.php');

$action->helper->route('/',function(){
    global $action;
  //  $action->view->load('header',["title"=>"heading test",'heading'=>"This is new heading "]);
    $data['title']='Resume online';
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    $action->view->load('footer');


});

$action->helper->route('action/createresume',function(){
    global $action;
    $action->onlyForAuthUser();
    /*echo "<pre>";
    print_r($_POST);*/
    $resume_data[0]=$action->session->get('Auth')['data']['id'];
    $resume_data[1]=$action->db->clean($_POST['name']);
    $resume_data[2]=$action->db->clean($_POST['headline']);
    $resume_data[4]=$action->db->clean($_POST['objective']);
    
    $contact['email']=$action->db->clean($_POST['email']);
    $contact['mobile']=$action->db->clean($_POST['mobile']);
    $contact['address']=$action->db->clean($_POST['address']);

    $resume_data[3]=json_encode($contact);
    $resume_data[5]=json_encode($_POST['skill']);

    $education=array();
    $work=array();


    foreach($_POST['college'] as $key=>$value){
        $education[$key]['college']=$action->db->clean($value);
        $education[$key]['course']=$action->db->clean($_POST['course'][$key]);
        $education[$key]['e_duration']=$action->db->clean($_POST['e_duration'][$key]);

    }

    foreach($_POST['company'] as $key=>$value){
        $work[$key]['company']=$action->db->clean($value);
        $work[$key]['jobrole']=$action->db->clean($_POST['jobrole'][$key]);
        $work[$key]['w_duration']=$action->db->clean($_POST['w_duration'][$key]);
        $work[$key]['work_desc']=$action->db->clean($_POST['work_desc'][$key]);

    }

    $resume_data[6]=json_encode($work);
    $resume_data[7]=json_encode($education);
    $resume_data[8]=$action->helper->UID();
    $resume_data[9]=json_encode($_FILES['image']);

    // $image['image']=$action->db->clean($_POST['image']);
    // $resume_data[9]=json_encode($image);


    
    $status['status']=$action->db->clean($_POST['template']);
    $resume_data[10]=json_encode($status);
   
if(isset($_FILES['image'])){
    $img_name = $_FILES['image']['name'];
    $img_type = $_FILES['image']['type'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $image_name = basename($_FILES['image']['name']);
    $resume_data[9] = $image_name;
    
    $img_explode = explode('.',$img_name);
    $img_ext = end($img_explode);

    $extensions = ["jpeg", "png", "jpg","JPG"];
    if(in_array($img_ext, $extensions) === true){
        $types = ["image/jpeg", "image/jpg", "image/png","image/JPG"];
        if(in_array($img_type, $types) === true){
            $time = time();
            $new_img_name = $time.$img_name;
            $image_folder = './assets/templet_img/';
            $resume_data[9] = json_encode($new_img_name);
            if(move_uploaded_file($tmp_name,"$image_folder".$new_img_name)){
          

                $run=$action->db->insert('resumes','user_id,name,headline,objective,contact,skills,experience,education,url,image,status',$resume_data);

                if($run){
                    $action->session->set('success','Resume Created!');
                    $action->helper->redirect('home');
                }
                else{
                    
                    $action->session->set('error','Something went wrong, try again after sometime');
                    $action->helper->redirect('home');
                }

            }
            else{
                $action->session->set('error','Something went wrong. Please try again!');
                // echo "Something went wrong. Please try again!";
                $action->helper->redirect('resume-details/');
            }
        }
        else{
            //aa
            $action->session->set('error','Please upload an image file - jpeg, png, jpg');
            // echo "Please upload an image file - jpeg, png, jpg";
            $action->helper->redirect('resume-details/');
        }
    }
    else{
        $action->session->set('error','Please upload an image file - jpeg, png, jpg');
        // echo "Please upload an image file - jpeg, png, jpg";
        $action->helper->redirect('resume-details/');
    }

}
else{
    $run=$action->db->insert('resumes','user_id,name,headline,objective,contact,skills,experience,education,url,image,status',$resume_data);

    if($run){
        $action->session->set('success','Resume Created!');
        $action->helper->redirect('home');
    }
    else{
        
        $action->session->set('error','Something went wrong, try again after sometime');
        $action->helper->redirect('home');
    }
}

});



//delete karava mate 
$action->helper->route('action/deleteresume/$url',function($data){
    global $action;
    $url=$data['url'];
    $action->db->delete('resumes',"url='$url'");

    $action->session->set('success','delete successfully !');
    $action->helper->redirect('home');
});


//logout
$action->helper->route('action/logout',function(){
    global $action;
    $action->session->delete('Auth');
    $action->session->set('success','logged out !');
    $action->helper->redirect('login/1');
});

//for home 
$action->helper->route('home',function(){         
    global $action;
    $action->onlyForAuthUser();
    $data['title']='home';
    $data['myresume']='active';
    
    $data['resumes']=$action->db->read('resumes','*',"WHERE user_id=".$action->user_id());
    //$data['resumes']=$action->db->read('resumes2','*',"WHERE user_id=".$action->user_id());
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    $action->view->load('home_content',$data);
    $action->view->load('footer');
});


$action->helper->route('resume-details/$resumetype',function($data){         
    global $action;
    $action->onlyForAuthUser();
    $data['title']="Resume-Details";
    $data['myresume']='active';
    
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    if($data['resumetype']==1){
        $action->view->load('resume_details1');
    }

    else if($data['resumetype']==2){
        $action->view->load('resume_details2');
    }
    else if($data['resumetype']==3){
        $action->view->load('resume_details3');
    }
    else if($data['resumetype']==4){
        $action->view->load('resume_details5');
    }

    else{
        $action->session->set('error','invaild resume type');
        $action->helper->redirect('select-template');
    }
   

  
    $action->view->load('footer');
});


//for templeate select page

$action->helper->route('select-template',function(){         
    global $action;
    $action->onlyForAuthUser();
    $data['title']="Select Resume Template";
    $data['myresume']='active';
    
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    $action->view->load('template_content');

  
    $action->view->load('footer');
});


//for style new templet  template_content.php

$action->helper->route('resume/$url',function($data){         
    global $action;
    $resumedata=$action->db->read("resumes","*","WHERE url='".$data['url']."'");
    if(!$resumedata){
        $action->helper->redirect('home');
    }

    $resumedata=$resumedata[0];


    $data['title']=$resumedata['name'];
    $data['type']=json_decode($resumedata['status'])->status;

    $data['resume']=$resumedata;

    if($data['type']==1){
        $action->view->load('resume1_content',$data);
    }
    else if($data['type']==2){
        $action->view->load('resume2_content',$data);
    }
    else if($data['type']==3){
        $action->view->load('resume3_content',$data);
    }
    else if($data['type']==4){
        $action->view->load('resume4_content',$data);
    }
    else if($data['type']==5){
        $action->view->load('resume5_content',$data);
    }
  
    else{
        $action->helper->redirect('home');
    }
  

});


//for login
$action->helper->route('login/$url',function(){
    //print_r($_SESSION);         
    global $action;
    $action->onlyForUnauthUser();
    $data['title']='login';
    $data['stype']="1";
    
    $action->view->load('header',$data);
    echo"<style>
    html,
    body {
        background: #fff;
        font-family: arial;
      }
    </style>";
    $action->view->load('login_content');
    $action->view->load('footer');
});


$action->helper->route('action/login',function(){
    global $action;

    $error=$action->helper->isAnyEmpty($_POST);

    if($error){
        $action->helper->redirect('login/1');
        $action->session->set('error',"$error is empty !");
        //$action->helper->redirect('login/1');
    }
    else{
        $email=$action->db->clean($_POST['email']);
        $password=$action->db->clean($_POST['password']);

        $user=$action->db->read('users','id,email_id',"WHERE email_id='$email' AND password='$password'");
        if(count($user)>0){
            $action->session->set('Auth',['status'=>true,'data'=>$user[0]]);
            $action->session->set('success','logged in');
            $action->helper->redirect('home');
        }
        else{
            $action->session->set('error',"incorrect email/password");
            $action->helper->redirect('login/1');
        }
    }
});



//for sign_up

$action->helper->route('signup/$url',function($data){
    //print_r($_SESSION);         
    global $action;
    $action->onlyForUnauthUser();
    $data['title']='signup';
    $data['stype']="1";
    $action->view->load('header',$data);
    echo"<style>
    html,
    body {
        background: #fff;
        font-family: arial;
      }
    </style>";

    $action->view->load('signup_content');
    $action->view->load('footer');

    
});



//for signup action

$action->helper->route('action/signup',function(){
    global $action;
    //print_r($_POST);
    $error=$action->helper->isAnyEmpty($_POST);
    if($error){
        $action->session->set('error',"$error is empty !");
        $action->helper->redirect('signup/1');
    }
    else{
        $signup_data[0]=$action->db->clean($_POST['full_name']);
        $signup_data[1]=$action->db->clean($_POST['email']);
        $signup_data[2]=$action->db->clean($_POST['password']);

        $user=$action->db->read('users','email_id',"WHERE email_id='$signup_data[1]'");
        if(count($user)>0){
            $action->session->set('error', $signup_data[1]." is already registered");
         
            $action->helper->redirect('signup/1');
        }
        else{
            $action->db->insert('users','full_name,email_id,password',$signup_data);
            $action->session->set('success','account created !');
            $action->helper->redirect('login/1');
        }
       
    }
});


//Profile 


$action->helper->route('Profile',function($data){         
    global $action;
    $action->onlyForAuthUser();
    //$data['title']="Resume-Details";
    //$data['myresume']='active';
    $user_id=$action->user_id();
    //$data['resumes']=$action->db->read('resumes','*',"WHERE user_id=".$action->user_id());
    $user_db_data=$action->db->read('users','*','WHERE id='.$user_id);
    //print_r($user_db_data);         

    if(!$user_db_data){
        $action->helper->redirect('home');
    }

    $user_db_data=$user_db_data[0];


    $data['title']=$user_db_data['full_name'];


    $data['userTdata']=$user_db_data;
     //print_r($data);

    $action->view->load('header',$data);
    
    $action->view->load('Profile_Option',$data);

    $action->view->load('footer');

    

});




$action->helper->route('action/Profile',function(){
    global $action;
    $action->onlyForAuthUser();
    $error=$action->helper->isAnyEmpty($_POST);

    if($error){
        $action->session->set('error',"$error is empty !");
        $action->helper->redirect('Profile');
    }
    else{

        $Username=$action->db->clean($_POST['Username']);
        $first_name=$action->db->clean($_POST['first_name']);
        $last_name=$action->db->clean($_POST['last_name']);
        $About_Me=$action->db->clean($_POST['About_Me']);
        $profession=$action->db->clean($_POST['profession']);

       

        $email=$action->db->clean($_POST['email']);
        $password=$action->db->clean($_POST['password']);
        $co_password=$action->db->clean($_POST['co_password']);


                if(isset($_FILES['profile_pic'])){
                    $img_name = $_FILES['profile_pic']['name'];
                    $img_type = $_FILES['profile_pic']['type'];
                    $tmp_name = $_FILES['profile_pic']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg","JPG"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png","image/JPG"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            $image_folder = './assets/images_user/';
                            if(move_uploaded_file($tmp_name,"$image_folder".$new_img_name)){
                                        
                                if($password == $co_password){
                                    //if($image_size > 20000000){
                                        $user_id=$action->user_id();
                                        // die($user_id);
                                // $ran_id = rand(time(), 100000000);
                                // $status = "Active now";
                                // $encrypt_pass = md5($password);
                                // $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                // VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");

                                $user = $action->db->update('users', 'full_name,first_name,last_name,About_Me,profession,user_image,email_id,password', [$Username,$first_name,$last_name,$About_Me,$profession,$new_img_name,$email,$password], 'id='.$user_id);
                                //die($user);
                               // move_uploaded_file($image_tmp_name, $image_folder);
                                $action->helper->redirect('Profile');
                                if($user==true){
                                    //move_uploaded_file($image, $image_folder);
                                    //$action->session->set('Auth',['status'=>true,'data'=>$user[0]]);
                                    $action->session->set('success','Profile Update Success');
                                    //$action->helper->redirect('Profile');
                                }
                    
                                else{
                                    $action->session->set('error',"Something is wrong");
                                    //$action->helper->redirect('Profile');
                                }
                            //}
                            // else{
                            //     $action->helper->redirect('Profile');
                            //     $action->session->set('error',"Image Size was big");
                            // }


                                }
                                else{
                                    $action->helper->redirect('Profile');
                                    $action->session->set('error',"Password Do Not Match");
                                }
                        

                            }
                            else{
                              
                                $action->helper->redirect('Profile');
                                $action->session->set('error','Something went wrong. Please try again!');
                                //  echo "";
                            }
                        }
                        else{
                            $action->helper->redirect('Profile');
                            $action->session->set('error','Please upload an image file - jpeg, png, jpg');
                            //aa
                           // echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }
                    else{
                        $action->helper->redirect('Profile');
                        $action->session->set('error','Please upload an image file - jpeg, png, jpg');
                        //echo "Please upload an image file - jpeg, png, jpg";
                    }
              







    

        }
        else{
            $action->helper->redirect('Profile');
            $action->session->set('error','error yo upload');
           // echo "error yo upload";
        }
        

    }
});



$action->helper->route('action/download/$url',function($data){         
    global $action;
    $url=$data['url'];
    $resumedata=$action->db->read("resumes","*","WHERE url='".$url."'");
    if(!$resumedata){
        $action->helper->redirect('home');
    }

    $resumedata=$resumedata[0];


    $data['title']=$resumedata['name'];
    $data['type']=json_decode($resumedata['status'])->status;

    $data['resume']=$resumedata;

    if($data['type']==1){
        $action->helper->redirect('home');
        echo "<html>";
        echo "<head>";
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>';
        echo "</head>";
        echo "<body>";
        echo " <script>
	  var button = document.getElementById('btn-convert');
	  button.addEventListener('click', function() {
	    var element = document.getElementById('html-content-holder');

	    html2canvas(element).then(function(canvas) {
	      var imageData = canvas.toDataURL('image/png');
	      var downloadLink = document.createElement('a');
	      downloadLink.href = imageData;
	      downloadLink.download = 'Resume-Download.png';

	      document.body.appendChild(downloadLink);
	      downloadLink.click();
	      document.body.removeChild(downloadLink);
	    });
	  });
      </script>";
        echo "</body>";
        echo "</html>";
    }
    else if($data['type']==2){
        $action->helper->load_js('main.js');
        $action->helper->redirect('home');
    }
    else{
        $action->helper->redirect('home');
    }
  

});


$action->helper->route('Dashboard',function(){  
    global $action;       
    include("Main_Home_Page/index.php");

});




if(!Helper::$isPageIsAvailable){
     echo "no page founed ";
    
}












/*$action->helper->route('Signup/$name/$age/$username',function($data){
    global $action;
    $data['title']='Signup';
    $action->view->load('header',$data);
});*/



/*     $action->helper->route('resume/$username/$name',function($data){
        //print_r($data);
        echo "Hello World";
    });

    $action->helper->route('/',function($data){
        //print_r($data);
        echo "Home page";
    });

    $action->helper->route('resume',function($data){
        //print_r($data);
        echo "in the resume part";
    });*/

?>