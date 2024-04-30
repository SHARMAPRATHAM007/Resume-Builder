<?php 

echo "Hello";
    $urldata=helper->url("resume/".$resume['url']);
    print_r($urldata);
    $data['url']=$url;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <title>Download</title>
</head>
<body>
    
<?php

global $action;
$resumedata=$action->db->read("resumes","*","WHERE url='".$data['url']."'");
    if(!$resumedata){
       
    }

?>


</body>


</html>
























<?php



?>