<!-- echo "This Profile page"; -->
<?php

        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$action->helper->load_css('profilepage.css')  ?>">
  
    <link rel="icon" href="<?=$action->helper->load_image('abb.jpg')  ?>">
    <title><?=@$title ?></title>
    
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <div class="main-content">
    <!-- Top navbar  https://www.creative-tim.com/product/argon-dashboard-->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        Resume-
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#" target="_blank">     Builder </a>-Softwere 
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
         <!-- User --->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="<?=$action->helper->url('home')?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <?php 
                  if($userTdata['user_image']==true)
                  { 
                  ?>
                   <img alt="Image placeholder" src="<?=$action->helper->load_img($userTdata['user_image'])  ?>" > 


                   <?php
                  }
                  else{

                   ?>
                  <img alt="Image placeholder" src="<?=$action->helper->load_img('avatar.svg')  ?>" > 
                   <?php
                  }
                   ?>
                  <!-- <img alt="Image placeholder" src='./assets/images_user/'$userTdata['user_image'] -->
                </span>
              
                <div class="media-body ml-2 d-none d-lg-block">  
                  <span class="mb-0 text-sm  font-weight-bold" ><?=@$userTdata['full_name']?></span>
                </div>

              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>

              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav> 
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://raw.githubusercontent.com/creativetimofficial/argon-dashboard/gh-pages/assets-old/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?=@$userTdata['full_name']?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#UserEdit" class="btn btn-info">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <?php
                  if($userTdata['user_image']==true)
                  { 
                  ?>
                   <img src="<?=$action->helper->load_img($userTdata['user_image'])  ?>" class="rounded-circle" name="image_place">

                   <?php
                  }
                  else{

                   ?>
                  <img alt="Image placeholder" src="<?=$action->helper->load_img('avatar.svg')  ?>" > 
                   <?php
                  }
                   ?>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="https://www.linkedin.com/in/dhruv-joshi-838591250/" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="<?=$action->helper->url('home')?>" class="btn btn-sm btn-default float-right">Resume</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading" style="text-align=center;"><??></span>
                      <span class="description">Total Resume create</span>
                    </div>
                    <!-- <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                <?=@$userTdata['full_name']?><span class="font-weight-light"></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?=@$userTdata['first_name']?>, <?=@$userTdata['last_name']?>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=@$userTdata['profession']?>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i><?=@$userTdata['email_id']?>
                </div>
                <hr class="my-4">
               
                <p><?=@$userTdata['About_Me']?></p>
                <a href="#">Show more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0" id="UserEdit">My account</h3>
                </div>
                <div class="col-4 text-right">
                <button type="submit" form="userFormSub" class="btn btn-sm btn-primary" value="upload">Save Settings</button>

                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="POST" action="<?=$action->helper->url('action/Profile')?>" id="userFormSub" enctype="multipart/form-data">
              
                <h6 class="heading-small text-muted mb-4" >User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" name="Username" value="<?=@$userTdata['full_name']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label class="form-control-label" for="input-address">New Profile Photo</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Upload Your Photo" type="file" name="profile_pic" accept="image/jpg, image/jpeg, image/png">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" name="first_name" value="<?=@$userTdata['first_name']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" name="last_name" value="<?=@$userTdata['last_name']?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Reset Your Email & Password</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com" name="email" value="<?=@$userTdata['email_id']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">New Password</label>
                        <input type="password" id="input-city" class="form-control form-control-alternative" placeholder="abc" name="password" value="<?=@$userTdata['password']?>" >
                      </div>
                    </div>
                     <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Comform Password</label>
                        <input type="password" id="input-country" class="form-control form-control-alternative" placeholder="abc" name="co_password" value="<?=@$userTdata['password']?>">
                      </div>
                    </div> 
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>About Me</label>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ..." name="About_Me" ><?=@$userTdata['About_Me']?></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Profession</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Like Web dev..." type="text" name="profession" value="<?=@$userTdata['profession']?>">
                      </div>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
