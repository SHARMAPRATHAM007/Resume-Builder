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
    
    <link rel="stylesheet" href="<?=$action->helper->load_css('resume_file1.css')  ?>">
  
    <link rel="icon" href="<?=$action->helper->load_image('abc.png')  ?>">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

    <title><?=@$title ?></title>
   
    
</head>
<body>
  





<div class="container ml-1" id="html-content-holder">
<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1 style="margin-left:10px"><?=@$resume['name']?></h1>
					<h2><?=@$resume['headline']?></h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
                        <h3 style="padding-left:1em"><a href="mailto:name@yourdomain.com"><?=$contact->email?></a></h3>
						<h3 style="padding-left:1em"><?=$contact->mobile?></h3>
						<h3 style="padding-left:1em"><?=$contact->address?></h3>
						<h3 class="D_botton" style="padding:1em 0em 0em 46em;"><a id="pdf" href="#">Download PDF</a></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Objective</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge"><?=$resume['objective']?></p>
						</div>
					</div><!--// .yui-gf -->


					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">
							<?php
							foreach($skills as $skill){
							?>
								<ul class="talent">
								<li ><?=$skill?></li>
								</ul>
							<?php
								}
							?>
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">
<?php
if(count($works)<1){
?>

						<div class="job last">
							<h3>Fresher</h3>
						</div>
<?php
}
foreach ($works as $work) {

?>
								<div class="job">
								<h2><?=$work->company?></h2>
								<h3><?=$work->jobrole?></h3>
								<h4><?=$work->w_duration?></h4>
								<p><?=$work->work_desc?></p>
							</div>
<?php
}
?>



						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<?php
						foreach($education as $ed){

						?>
						<div class="yui-u" style="padding-bottom:10px;border-bottom:1px solid #ccc">
							<h2><?=$ed->college?></h2>
							<h3 style="padding-left:7.5em"><?=$ed->course?> &mdash; (<?=$ed->e_duration?>) </h3>
						</div>
						<?php
						}
						?>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?=@$resume['name']?> <a href="mailto:name@yourdomain.com"><?=$contact->email?></a> &mdash; <?=$contact->mobile?></p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->
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