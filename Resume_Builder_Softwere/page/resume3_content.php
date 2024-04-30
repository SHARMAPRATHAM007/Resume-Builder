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
    <link rel="stylesheet" href="<?=$action->helper->load_css('resume_file3.css')  ?>" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
      
    <title>Resume</title>
</head>

<body>
<div class="wrapper" >
		<div class="resume" id="html-content-holder">
			<div class="left">
				<div class="img_holder">

                <?php
                  $user_id=$action->user_id();
                $resume['image'] = str_replace('"',"",$resume['image']);

                ?>
                <img src="http://localhost/Resume_Builder_Softwere/assets/templet_img/<?php echo $resume['image']?>" alt="">


					<!-- <img src="pic.png" alt="picture"> -->
				</div>
				<div class="contact_wrap pb">
					<div class="title">
						Contact
					</div>
					<div class="contact">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
									<div class="text"><?=$contact->mobile?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
									<div class="text"><?=$contact->email?></div>
								</div>
							</li>
							<!-- <li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-weebly" aria-hidden="true"></i></div>
									<div class="text">www.aniabukstein.com</div>
								</div>
							</li> -->
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-map-signs" aria-hidden="true"></i></div>
									<div class="text"><?=$contact->address?></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- <div class="skills_wrap pb">
					<div class="title">
						Skills
					</div>
					<div class="skills">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-html5"></i></div>
									<div class="text">HTML</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-css3-alt"></i></div>
									<div class="text">CSS</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-js"></i></div>
									<div class="text">Javascript</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-react"></i></div>
									<div class="text">React.JS</div>
								</div>
							</li>
						</ul>
					</div>
				</div> -->
				<div class="hobbies_wrap pb">
					<div class="title">
						Skills
					</div>
					<div class="hobbies">
                    <?php
                        if($skills==NULL){
                    ?>
                        <ul>
							<li>
								<div class="li_wrap">
									<div class="text">Skill Not Say</div>
								</div>
							</li>
						</ul>
                    <?php
                        }
                        else{
							foreach($skills as $skill){
					?>                        
						<ul>
							<li>
                                <div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?=$skill?></div>
								</div>
							</li>
						</ul>
                    <?php
						}
                    }
					?>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="header">
					<div class="name_role">
						<div class="name">
                        <?=@$resume['name']?>
						</div>
						<div class="role">
                        <?=@$resume['headline']?>
						</div>
					</div>
					<div class="about">
					<?=$resume['objective']?>
					</div>
				</div>
				<div class="right_inner">
					<div class="exp">
						<div class="title">
							experience
						</div>
<?php
     if(count($works)<1){
?>
                        <ul>
							<li>
								<div class="li_wrap">
								    <div class="date">
                                    Fresher
								    </div>
                                </div>
                            </li>
                        </ul>
<?php
}
foreach ($works as $work) {

?>
						<div class="exp_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
                                            <?=$work->w_duration?>
										</div>
										<div class="info">
											<p class="info_title">
											<?=$work->jobrole?>
											</p>
											<p class="info_com">
                                            <?=$work->company?>
											</p>
											<p class="info_cont">
                                            <?=$work->work_desc?>
                                            </p>
												<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptatibus consequatur rem nostrum omnis! Architecto. -->			
										</div>
									</div>
								</li>
							</ul>
						</div>
                        <?php
                        }
                        ?>
					</div>

					<div class="education">
						<div class="title">
							Education
						</div>
						<div class="education_wrap">
                        <?php
						foreach($education as $ed){

				?>
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
                                        <?=$ed->e_duration?>
										</div>
										<div class="info">
											<p class="info_title">
                                            <?=$ed->course?>
											</p>
											<p class="info_com">
                                            <?=$ed->college?>
											</p>
											<!-- <p class="info_cont">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptatibus consequatur rem nostrum omnis! Architecto.
											</p> -->
										</div>
									</div>
								</li>
							</ul>
                            <?php
                        }
                    ?>
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