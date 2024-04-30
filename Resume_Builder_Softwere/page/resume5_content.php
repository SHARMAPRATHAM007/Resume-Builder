<?php
$resume['contact']=str_replace('\\',"",$resume['contact']);
$resume['skills']=str_replace('\\',"",$resume['skills']);
$resume['works']=str_replace('\\',"",$resume['experience']);
$resume['education']=str_replace('\\',"",$resume['education']);

$contact=json_decode($resume['contact']);
$skills	=json_decode($resume['skills']);
$works	=json_decode($resume['works']);
$education=json_decode($resume['education']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$action->helper->load_css('resume_file5.css')  ?>" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://kit.fontawesome.com/26e5c389ba.js" crossorigin="anonymous"></script>
    <title>Resume</title>
</head>

<body>
    
  <!---...........................Resume Contener............................................-->
  <div  id="html-content-holder">
    <div id="contenerprint">
      <div class="Resume_container__Z0JCf" style="--color:#239ce2;">
        <div class="Resume_header__WBfiM" id="body_header">
            
        <?php
                  $user_id=$action->user_id();
                $resume['image'] = str_replace('"',"",$resume['image']);

                ?>
                <img src="http://localhost/Resume_Builder_Softwere/assets/templet_img/<?php echo $resume['image']?>" alt="" class="setphoto">
          <!-- <img src="Profile-Avatar-PNG.png" class="setphoto" id="imgtemp"> -->
          <div id="class_content">
            <p class="Resume_heading__6QapZ"><?=@$resume['name']?></p>
            <p class="Resume_subHeading__wi-sb"><?=@$resume['headline']?></p>
            <div class="Resume_links__0mftb">
              <i class="fa-regular fa-at"><a class="space_abc"><?=$contact->email?></a></i>
              <i class="fa-solid fa-phone"></i><a class="space_pqr"><?=$contact->mobile?></a>
              <i class="fa-brands fa-linkedin-in"><a class="space_xyz"><?=$contact->address?></a></i>
              <!-- <i class="fa-brands fa-github"><a class="space_atz" id="git1"></a></i> -->
            </div>
          </div>
        </div>

        <div class="Resume_main__WleI3">
          <div class="Resume_col1__gYnwq">

            <div draggable="true" class="Resume_section__c9BAH ">
              <div class="Resume_sectionTitle__1+31P">Work Experience</div>
<?php
     if(count($works)<1){
?>
            <div class="Resume_content__+m+jX"></div>
              <div>
                <p>Fresher</p>
              </div>
            </div>
<?php
}
foreach ($works as $work) {

?>
              <div class="Resume_content__+m+jX"></div>
              <div>
                <p><?=$work->jobrole?></p>
              </div>

              <div>
                <p style="color: var(--color); font-size: 17px; margin:2.5px; "><?=$work->company?></p>
              </div>

              <div class="uper_space2"><i class="fa-regular fa-calendar"></i><a class="work_cale">
                <?=$work->w_duration?></a>
              </div>

              <div class="uper_space3">
                <label> Work Description:</label>
                <p><?=$work->work_desc?></p>
              </div>
                <!-- <a style="border: 1px solid #0a0a0a;"></a> -->
              <?php
                }
               ?>

            </div>


            <div draggable="true" class="Resume_section__c9BAH ">
              <div class="Resume_sectionTitle__1+31P">Education</div>
              <?php
						foreach($education as $ed){

				?>
              <div class="Resume_content__+m+jX"></div>
              <div><span id="Edu_title_contener"><?=$ed->course?></span></div>
              <div>
                <h4 id="Edu_name_contener" style="color: var(--color);"> <?=$ed->college?></h4>
              </div>
              <div>
                <i class="fa-regular fa-calendar"></i>
                <span id="s_contener" style=" margin-left: 8px;"><?=$ed->e_duration?></span>
                </div>
                <?php
                        }
                    ?>
            </div> 

          </div>

          <div class="Resume_col2__3qdcP">


            <div draggable="true" class="Resume_section__c9BAH ">
              <div class="Resume_sectionTitle__1+31P">Skills</div>
              <div class="Resume_content__+m+jX" style="padding-top:1px"></div>
              <?php
                        if($skills==NULL){
                    ?>
                <div style="padding-top:1px; margin-left: 20px;">     
                  <p>Skill are not maintion</p>
              </div>
<?php
                        }
                        else{
							foreach($skills as $skill){
					?> 
              <div style="padding-top:1px; margin-left: 20px;">     
                  <li><?=$skill?></li>  
              </div>
              <?php
						}
                    }
					?>

            </div>

            <div draggable="true" class="Resume_section__c9BAH ">
              <div class="Resume_sectionTitle__1+31P">Other</div>
              <div class="Resume_content__+m+jX">
                <p class="Resume_overview__9VseX"><?=$resume['objective']?></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-primary" id="btn-convert" style=" background-color: gray;
  color: white;
  text-align: center;
  display: block;
  margin: 20px auto;
  padding: 10px 20px;"> Download</button>
 


<script>

	  var button = document.getElementById("btn-convert");
	  button.addEventListener("click", function() {
	    var element = document.getElementById("html-content-holder");

	    html2canvas(element).then(function(canvas) {
	      var imageData = canvas.toDataURL("image/png");

	     
	      var downloadLink = document.createElement("a");
	      downloadLink.href = imageData;
	      downloadLink.download = "Resume-Download.png";

	      document.body.appendChild(downloadLink);
	      downloadLink.click();
	      document.body.removeChild(downloadLink);
	    });
	  });
      </script>


</body>

</html>