<?php
/*    echo "<pre>";
    print_r($data);
    echo $username;
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--<link rel="apple-touch-icon" href="logo192.png">--<link rel="icon" href="favicon.ico">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 

    <?php
        if(@$type==1){

    ?>
    <link rel="stylesheet" href="<?=$action->helper->load_css('resume_file.css')  ?>">
    <?php
        }
    ?>

<?php
        if(@$stype==1){

    ?>
    <link rel="stylesheet" href="<?=$action->helper->load_css('main.css')  ?>">
    <?php
        }
    ?>    




    <link rel="icon" href="<?=$action->helper->load_image('abb.jpg')  ?>">
    <title><?=@$title ?></title>
   
</head>
<body>
  
