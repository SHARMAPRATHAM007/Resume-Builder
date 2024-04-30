<?php
/*    echo "<pre>";
    print_r($data);
    echo $username;
*/
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
    <link rel="stylesheet" href="<?=$action->helper->load_css('resume_file2.css')  ?>" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
      
    <title>Resume</title>
</head>

<body>
    <section class="main-section" id="html-content-holder">
        <div class="left-part">
            <div class="photo-container">
                <?php
                  $user_id=$action->user_id();
                $resume['image'] = str_replace('"',"",$resume['image']);

                ?>
                <img src="http://localhost/Resume_Builder_Softwere/assets/templet_img/<?php echo $resume['image']?>" alt="">
            </div>
            <div class="contact-container">
                <h2 class="title">Contact Me</h2>
                <div class="contact-list">
                    <div class="icon-container">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="contact-text">
                        <p><?=$contact->address?></p>
                    </div>
                </div>
                <div class="contact-list">
                    <div class="icon-container">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="contact-text">
                        <p><?=$contact->email?></p>
                    </div>
                </div>

                <div class="contact-list">
                    <div class="icon-container">
                        <i class="bi bi-linkedin"></i>
                    </div>
                    <div class="contact-text">
                        <p><?=$contact->mobile?></p>
                    </div>
                </div>
            </div>

            <div class="education-container">
                <h2 class="title">Education</h2>
                <div class="course">
                <?php
						foreach($education as $ed){

				?>
                    <h2 class="education-title"><?=$ed->course?></h2>
                    <h5 class="college-name"><?=$ed->college?></h5>
                    <p class="education-date"><?=$ed->e_duration?></p>
                    <?php
                        }
                    ?>
                </div>
            </div>

            <div class="skills-container">
                <h2 class="title">Skills</h2>

<?php
if($skills==NULL){
?>
		<div class="left-skill">
        <p>Skill are not maintion</p>
        </div>
<?php
}
else{
	foreach($skills as $skill){
?>
		<div class="left-skill">
        <p><?=$skill?></p>
        </div>
<?php
	}
}
?>

            </div>
        </div>
        <div class="right-part">
            <div class="banner">
                <h1 class="firstname"><?=@$resume['name']?></h1>
                <!--<h1 class="lastname">Anderson</h1>--> 
                <p class="position"><?=@$resume['headline']?></p>
            </div>


            <div class="work-container ">
                <h2 class="title text-left">work experience</h2>
                
<?php
if(count($works)<1){
?>
						<div class="job last">
							<h3>Fresher</h3>
						</div>
                </div>

<?php
}
foreach ($works as $work) {

?>
                <div class="work">
                    <div class="job-date">
                        <p class="job"><?=$work->jobrole?></p>
                        <p class="date"><?=$work->w_duration?></p>
                    </div>
                    <h2 class="company-name"><?=$work->company?></h2>
                    <p class="work-text"><?=$work->work_desc?></p>
                </div>
<?php
}
?>
                    
             

                <div class="references-container">
                <h2 class="title text-left">Other</h2>
                    <div class="references">
                        <div class="left-references">
                            <p class="company-name"><?=$resume['objective']?></p>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <div id="html-content-holder">
		<img src="img/download.png">
		<p>
			<a href="resume2_content.php?file=download.png"></a>
		</p>
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
   