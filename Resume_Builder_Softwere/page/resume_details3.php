<?php 
                if(isset($_FILES['image'])){
                  $img_name = $_FILES['image']['name'];
                  $img_type = $_FILES['image']['type'];
                  $tmp_name = $_FILES['image']['tmp_name'];
                  
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
   
                          }
                          else{
                              echo "Something went wrong. Please try again!";
                          }
                      }
                      else{
                       
                          echo "Please upload an image file - jpeg, png, jpg";
                      }
                  }
                  else{
                      echo "Please upload an image file - jpeg, png, jpg";
                  }

      }

?>

<div class="container">
  <h2 class="my-3">Enter Your Details</h2>
<form method="POST" action="<?=$action->helper->url('action/createresume')?>" class="border border-2 rounded-2 p-2 my-4" enctype="multipart/form-data">

  <p class="fs-9"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg> Personal Details</p>
<div class="row justify-content-between mt-4">
 


  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="baburao ganpatrao apte" required >
    </div>
  </div>

  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Headlines</label>
    <div class="">
      <input type="text" class="form-control" name="headline" placeholder="Website Developer" id="inputEmail3" required>
    </div>
  </div>
</div>

  <div class="input-group mb-3">
<label for="inputEmail3" class="col-sm-2 col-form-label">Choose your photo</label>
  <div class="col-sm-8">
    <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03"  name="image"  accept="image/jpg, image/jpeg, image/png" require>
  </div>
</div>
    <hr>
    <p class="fs-9"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg> Contact Details</p>
    <div class="row justify-content-between">
    <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label" >Email</label>
    <div class="">
      <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="baburao@gmail.com" required>
    </div>
  </div>

  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Linkedin</label>
    <div class="">
      <input type="text" class="form-control" id="inputEmail3" name="mobile" placeholder="linkedin" required>
    </div>
  </div>
  </div>

  <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
    <div class="">
      <input type="text" class="form-control" id="inputEmail3" name="address" placeholder="Bhavnager,Gujarat" required>
    </div>
  </div>

  <hr>
    <div class="col-6 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
</svg>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Skills</label>
    <div class="skills" id="skills">
    <!--<input type="text" name="skill[]" class="form-control my-2" disabled value="html">-->
    </div>
    <div class="input-group mb-3">
    <input type="text" class="form-control" id="userskill" placeholder="HTML" >
    <button class="btn btn-primary" type="button" id="addskill">Add Skill</button>
    </div>
  </div>


  <hr>
    <div class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
  <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>      
    <label for="inputEmail3" class="col-sm-2 col-form-label">Education</label>
    <div id="educations" class="">
      
       <!--<h4>Gujarat technologycal Univercity</h4>
        <p>Diploma in computer - (2020-2022)</p>
        <button type="button" class="btn btn-sm btn-danger" >Remove</button>-->
      
    </div> 
    <div class="d-flex gap-2">
      <input type="text" class="form-control" id="college" placeholder="Charotar University">
      <input type="text" class="form-control" id="course" placeholder="BTECH">
      <input type="text" class="form-control" id="e_duration" placeholder="2020-2022">
      <button type="button" class="btn btn-primary" id="addeducation">Add </button>
    </div>
  </div>

  
  <hr>
  <div class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
  <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
</svg>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Experience</label>
    <div id="exps" class="">
      
    </div> 
    <div class="d-flex gap-2">
      <input type="text" class="form-control" id="company" placeholder="Google">
      <input type="text" class="form-control" id="jobrole" placeholder="Web Designer">
      <input type="text" class="form-control" id="w_duration" placeholder="2020-2022">
      
    </div>
    <span class="d-block mt-2">About your work</span>
    <textarea id="work_desc" class="w-100 mb-2"></textarea>
    <button type="button" class="btn btn-primary" id="addexp">Add</button>

  </div>
  
  <hr>
  <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Other</label>
    <div class="">
      <textarea class="w-100" name="objective" required></textarea>
     
    </div>
  </div>
  <input type="hidden" name="template" value="3">
  <button type="submit" id="submit" name="submit" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" fill="currentColor" class="bi bi-box2 " viewBox="0 0 16 16">
  <path d="M2.95.4a1 1 0 0 1 .8-.4h8.5a1 1 0 0 1 .8.4l2.85 3.8a.5.5 0 0 1 .1.3V15a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4.5a.5.5 0 0 1 .1-.3L2.95.4ZM7.5 1H3.75L1.5 4h6V1Zm1 0v3h6l-2.25-3H8.5ZM15 5H1v10h14V5Z"/>
</svg> Create Resume</button>
</form>
</div>