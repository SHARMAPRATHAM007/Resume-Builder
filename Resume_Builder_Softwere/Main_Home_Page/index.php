<!--

=========================================================
* Notus Tailwind JS - v1.1.0 based on Tailwind Starter Kit by Creative Tim
=========================================================

* Product Page: https://www.creative-tim.com/product/notus-js
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md)

* Tailwind Starter Kit Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="Main_Home_Page/assets/img/abb.jpg" />
  <link rel="apple-touch-icon" sizes="76x76" href="Main_Home_Page/assets/img/apple-icon.png" />
  <link rel="stylesheet" href="Main_Home_Page/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="Main_Home_Page/assets/styles/tailwind.css" />
  <!-- <link rel="stylesheet" href="Main_Home_Page/assets/styles/index.css" /> -->
  <title>Resume Builder Software</title>
</head>

<body class="text-blueGray-700 antialiased">
  <nav
    class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-white shadow">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
      <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
        <a class="text-blueGray-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase" >Resume Builder Software</a>
        <button
          class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
          type="button" onclick="toggleNavbar('example-collapse-navbar')">
          <i class="fas fa-bars"></i>
        </button>
      </div>
      <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
        id="example-collapse-navbar">
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
          <li class="inline-block relative">
            <a class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
              href="#home" onclick="openDropdown(event,'demo-pages-dropdown')">
              Home
            </a>
            <!-- <div
              class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48 navbar-popper"
              id="demo-pages-dropdown">
              <span
                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                Admin Layout
              </span>
              <a href="./pages/admin/dashboard.html"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Dashboard
              </a>
              <a href="./pages/admin/settings.html"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Settings
              </a>
              <a href="./pages/admin/tables.html"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Tables
              </a>
              <a href="./pages/admin/maps.html"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Maps
              </a>
              <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
              <span
                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                Auth Layout
              </span>
              <a href="./pages/auth/login.html"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Login
              </a>
              <a href="./pages/auth/register.html"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Register
              </a>
              <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
              <span
                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                No Layout
              </span>
              <a href="./pages/landing.html"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Landing
              </a>
              <a href="./pages/profile.html"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Profile
              </a>
            </div> -->
          </li>
          <!-- <li class="home items-center">
          </li> -->
          <li class="flex items-center"><!--<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
              <path
                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
              <path
                d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
            </svg> -->
            <a class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
              href="<?=$action->helper->url('signup/1')?>" target="_blank">Sign up <span class="lg:hidden inline-block ml-2"></span></a>
          </li>
          <li class="flex items-center">
            <a class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
              href="<?=$action->helper->url('login/1')?>" target="_blank">Login <span class="lg:hidden inline-block ml-2"></span></a>
          </li>
          <li class="flex items-center">
            <!-- <button 
              class="text-white bg-pink-500 active:bg-pink-600 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
              type="button" style="background-color: #24a0ed;" href="https://www.linkedin.com/in/dhruv-joshi-838591250/">Get Contact 

            </button>-->
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="header relative pt-16 items-center flex h-screen max-h-860-px">
    <div class="container mx-auto items-center flex flex-wrap">
      <div class="w-full md:w-8/12 lg:w-6/12 xl:w-6/12 px-4">
        <div class="pt-32 sm:pt-0">
          <h2 class="font-semibold text-4xl text-blueGray-600" >
            Free Resume Builder Make Your Resume Online Quickly in 2023
          </h2>
          <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
            Creating a curriculum vitae can be overwhelming, especially when you have to do it all by yourself.
            <a  class="text-blueGray-600" target="_blank">
              Fast. Easy. Effective.
            </a>
            Lets outperform your competition and get you that dream job.
          </p>
          <div class="mt-12">
            <a href="<?=$action->helper->url('login/1')?>" target="_blank"
              class="get-started text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-pink-500 active:bg-pink-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
              style="background-color: #24a0ed;">
              Get started
              <i class="fa fa-angle-double-right ml-1 leading-relaxed"></i>
            </a>
            <a href="https://www.linkedin.com/in/dhruv-joshi-838591250/"
              class="github-star ml-1 text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-blueGray-700 active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
              target="_blank">
              About Us
            </a>
          </div>
        </div>
      </div>
    </div>

    <img class="absolute top-0 b-auto right-0 pt-16 sm:w-6/12 -mt-48 sm:mt-0 w-10/12 max-h-860-px"
      src="Main_Home_Page/assets/img/Home_main.webp" alt="..."  id="home"/>
  </section>

  <section class="mt-48 md:mt-40 pb-40 relative bg-blueGray-100">
    <div class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute h-20" style="transform: translateZ(0)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
        version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-blueGray-100 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-wrap items-center">
        <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-32">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500"
            style="background-color: #92a4b2;">
            <!-- style="background-color: #2bc0f1;" -->
            <!-- <img alt="..."
              src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80"
              class="w-full align-middle rounded-t-lg" /> -->
            <img alt="..." src="Main_Home_Page/assets/img/card-1-image.webp" class="w-full align-middle rounded-t-lg" />
            <blockquote class="relative p-8 mb-4">
              <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                class="absolute left-0 w-full block h-95-px -top-94-px">
                <polygon points="-30,95 583,95 583,65" class="bg-white text-blueGray-400  fill-current"></polygon>
              </svg>
              <h4 class="text-xl font-bold text-white">
                Build Your Resume Fast and Easy.
              </h4>
              <p class="text-md font-light mt-2 text-white">
                Resume builder is lightning fast.
                There's no software to download. No multi-part sign-up form.
                No long-winded tutorials. Just a straightforward process.
              </p>
            </blockquote>
          </div>
        </div>

        <div class="w-full md:w-6/12 px-4">
          <div class="flex flex-wrap">
            <div class="w-full md:w-6/12 px-4">
              <div class="relative flex flex-col mt-4">
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                    <i class="fas fa-sitemap"></i>
                  </div>
                  <h6 class="text-xl mb-1 font-semibold">Pick a Template</h6>
                  <p class="mb-4 text-blueGray-500">
                    Don't sabotage your job search before it has even begun. Choose from our ATS-friendly, hand-crafted
                    resume templates.
                  </p>
                </div>
              </div>
              <div class="relative flex flex-col min-w-0">
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                    <i class="fas fa-drafting-compass"></i>
                  </div>
                  <h6 class="text-xl mb-1 font-semibold">
                    Fill in the Blanks
                  </h6>
                  <p class="mb-4 text-blueGray-500">
                    Fill in your resume information, let our AI content analyzer do its job, and see your resume changes
                    dynamically in real time.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 px-4">
              <div class="relative flex flex-col min-w-0 mt-4">
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                    <i class="fas fa-newspaper"></i>
                  </div>
                  <h6 class="text-xl mb-1 font-semibold"> Customize Your Layout</h6>
                  <p class="mb-4 text-blueGray-500">
                    Make the resume template truly your own. Customize the layout based on your experience level.
                  </p>
                </div>
              </div>
              <div class="relative flex flex-col min-w-0">
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                    <i class="fas fa-file-alt"></i>
                  </div>
                  <h6 class="text-xl mb-1 font-semibold">Hit 'Download!'</h6>
                  <p class="mb-4 text-blueGray-500">
                    And yes, it's free! We don't hit you with a paywall once you've completed your resume in the Basic
                    Account. If you use any of our premium features, the software will let you know about it.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mx-auto overflow-hidden pb-20">
      <div class="flex flex-wrap items-center">
        <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto mt-48">
          <div
            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
            <i class="fas fa-sitemap text-xl"></i>
          </div>
          <h3 class="text-3xl mb-2 font-semibold leading-normal">
            Get inspired by resume samples from professional resume experts
          </h3>
          <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
            Search by job title to find resumes from resume experts that can inspire your own resume creation.
          </p>
          <div class="block pb-6">
            <span
              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
              Accountant
            </span>
            <span
              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
              Mechanical Engineer
            </span>
            <span
              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
              JAVA Developer
            </span>
            <span
              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
              Designer
            </span>
            <span
              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
              Recruiter
            </span>
            <span
              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
              Product Manager
            </span>
            <span
              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
              Digital Marketing
            </span>
            <span
              class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
              Teacher
            </span>
          </div>
          <!-- <a href="https://www.creative-tim.com/learning-lab/tailwind/js/alerts/notus?ref=njs-index" target="_blank"
            class="font-bold text-blueGray-700 hover:text-blueGray-500 ease-linear transition-all duration-150">
            View All
            <i class="fa fa-angle-double-right ml-1 leading-relaxed"></i>
          </a> -->
        </div>

        <div class="w-full md:w-5/12 px-4 mr-auto ml-auto mt-32">
          <div class="relative flex flex-col min-w-0 w-full mb-6 mt-48 md:mt-0">
            <img alt="..." src="Main_Home_Page/assets/img/component-btn.png"
              class="w-full align-middle rounded absolute shadow-lg max-w-100-px left-145-px -top-29-px z-3" />
            <img alt="..."
              src="https://www.visualcv.com/static/6438263d0dbc0eb996443d63e54edd7d/c7b70/Resources_2x.webp"
              class="w-full align-middle rounded-lg absolute shadow-lg max-w-210-px left-260-px -top-170-px" />
            <img alt="..." src="Main_Home_Page/assets/img/component-info-card.png"
              class="w-full align-middle rounded-lg absolute shadow-lg max-w-180-px left-40-px -top-225-px z-2" />
            <img alt="..." src="Main_Home_Page/assets/img/component-info-2.png"
              class="w-full align-middle rounded-lg absolute shadow-2xl max-w-200-px -left-50-px top-25-px" />
            <img alt="..." src="Main_Home_Page/assets/img/manu_item.PNG"
              class="w-full align-middle rounded absolute shadow-lg max-w-580-px -left-20-px top-210-px" />
            <img alt="..." src="Main_Home_Page/assets/img/component-btn-pink.png"
              class="w-full align-middle rounded absolute shadow-xl max-w-120-px left-195-px top-95-px" />
          </div>
        </div>
      </div>

      <div class="flex flex-wrap items-center pt-32">
        <div class="w-full md:w-6/12 px-4 mr-auto ml-auto mt-32">
          <div class="justify-center flex flex-wrap relative">
            <div class="my-4 w-full lg:w-6/12 px-4">
              
                <div class="bg-red-600 shadow-lg rounded-lg text-center p-8" style="background: #FD346e;">
                  <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                    src="Main_Home_Page/assets/img/ai-powered (1).svg" />
                  <p class="text-lg text-white mt-4 font-semibold">Powerful Resume Builder</p>
                  <!-- <p class="text-md font-light mt-2 text-white">Professional resume and resume builder 
                    software perfected over 
                    a decade by HR experts.</p> -->
                </div>
              
              
                <div class="bg-lightBlue-500 shadow-lg rounded-lg text-center p-8 mt-8" style="background:#5151e7;">
                  <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                    src="Main_Home_Page/assets/img/ai-powered (2).svg" />
                  <p class="text-lg text-black mt-4 font-semibold">Free-to-Download Templates</p>
                  <!-- <p class="text-md font-light mt-2 text-black">Each template can be 
                    downloaded instantly for Word 
                    or opened in Google Docs.</p> -->
                </div>
              
            
                <div class="bg-blueGray-700 shadow-lg rounded-lg text-center p-8 mt-8">
                  <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                    src="Main_Home_Page/assets/img/ai-powered (3).svg" />
                  <p class="text-lg text-white mt-4 font-semibold">FAQ Database</p>
                  <!-- <p class="text-md font-light mt-2 text-white">Can’t find the answer to your most pressing career-related questions? Our FAQ library is a good place to start.</p> -->
                </div>
              
            </div>
            <div class="my-4 w-full lg:w-6/12 px-4 lg:mt-16">
              
                <div class="bg-yellow-500 shadow-lg rounded-lg text-center p-8" style="background: #fcdc00;">
                  <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                    src="Main_Home_Page/assets/img/ai-powered (4).svg" />
                  <p class="text-lg text-black mt-4 font-semibold">
                    Job-Winning Examples
                  </p>
                  <!-- <p class="text-md font-light mt-2 text-black">Need a few ideas before 
                    submitting your application? 
                    View hundreds of resume for different jobs and life situations.</p> -->
                </div>
              
              
                <div class="bg-red-700 shadow-lg rounded-lg text-center p-8 mt-8" style="background:  #f44d4b;">
                  <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                    src="Main_Home_Page/assets/img/ai-powered (5).svg" />
                  <p class="text-lg text-white mt-4 font-semibold">Expert Writing Guides</p>
                  <!-- <p class="text-md font-light mt-2 text-white">Making a resume is 
                    easy with the right instructions. 
                    Our certified career coaches walk you 
                    through every step and detail.</p> -->
                </div>
              
              
                <div class="bg-emerald-500 shadow-lg rounded-lg text-center p-8 mt-8">
                  <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                    src="Main_Home_Page/assets/img/ai-powered (6).svg" />
                  <p class="text-lg text-black mt-4 font-semibold">Additional Career Resources</p>
                  <!-- <p class="text-md font-light mt-2 text-black">Resume Builder provides templates, 
                    tips on writing thank you, 
                    interview advice, and more.</p> -->
                </div>
              
            </div>
          </div>
        </div>

        <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto mt-48">
          <div
            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
            <i class="fas fa-drafting-compass text-xl"></i>
          </div>
          <h3 class="text-3xl mb-2 font-semibold leading-normal">
            How Resume Builder can boost your career
          </h3>
          <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
            Regardless of where you're at in your career, our guides, samples, and templates can help you take your
            professional life to new heights.
          </p>


          <a href="<?=$action->helper->url('login/1')?>" target="_blank"
            class="font-bold text-blueGray-700 hover:text-blueGray-500 ease-linear transition-all duration-150">
            Create Resume Now
            <i class="fa fa-angle-double-right ml-1 leading-relaxed"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="container mx-auto px-4 pb-32 pt-48">
      <div class="items-center flex flex-wrap">
        <div class="w-full md:w-5/12 ml-auto px-12 md:px-4">
          <div class="md:pr-12">
            <div
              class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
              <i class="fas fa-file-alt text-xl"></i>
            </div>
            <h3 class="text-3xl font-semibold">A feature-packed, easy-to-use resume builder</h3>
            <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
              Our swiss-army knife of career growth tools will help you reach your goals faster. Try them now for free.
            </p>
            <ul class="list-none mt-6">
              <li class="py-2">
                <div class="flex items-center">
                  <div>
                    <span
                      class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-blueGray-50 mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-webcam" viewBox="0 0 16 16">
                        <path
                          d="M0 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H9.269c.144.162.33.324.531.475a6.785 6.785 0 0 0 .907.57l.014.006.003.002A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.224-.947l.003-.002.014-.007a4.473 4.473 0 0 0 .268-.148 6.75 6.75 0 0 0 .639-.421c.2-.15.387-.313.531-.475H2a2 2 0 0 1-2-2V6Zm2-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H2Z" />
                        <path
                          d="M8 6.5a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm7 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                      </svg>
                    </span>
                  </div>
                  <div>
                    <h4 class="text-blueGray-500">
                      Find Jobs
                    </h4>
                  </div>
                </div>
              </li>
              <li class="py-2">
                <div class="flex items-center">
                  <div>
                    <span
                      class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-blueGray-50 mr-3">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-view-list" viewBox="0 0 16 16">
                        <path
                          d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z" />
                      </svg>
                    </span>
                  </div>
                  <div>
                    <h4 class="text-blueGray-500">
                      Track the jobs you’ve applied for
                    </h4>
                  </div>
                </div>
              </li>
              <!-- <li class="py-2">
                <div class="flex items-center">
                  <div>
                    <span
                      class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-blueGray-50 mr-3">
                      <i class="far fa-paper-plane"></i>
                    </span>
                  </div>
                  <div>
                    <h4 class="text-blueGray-500">
                      Dynamic Javascript Components
                    </h4>
                  </div>
                </div>
              </li> -->
            </ul>
          </div>
        </div>

        <div class="w-full md:w-6/12 mr-auto px-4 pt-24 md:pt-0">
          <img alt="..." class="max-w-full rounded-lg shadow-xl" style="
                transform: scale(1) perspective(1040px) rotateY(-11deg)
                  rotateX(2deg) rotate(2deg);
              "
            src="https://zoo-ki3-nsdc-qc-content.s3.ca-central-1.amazonaws.com/0ca7d7b9-9c9b-4556-918f-4ecb9bdb429e/Resume2_6edcfd6043.jpg" />
        </div>
      </div>
    </div>

    <div class="justify-center text-center flex flex-wrap mt-24">
      <div class="w-full md:w-6/12 px-12 md:px-4">
        <h2 class="font-semibold text-4xl">Ready to start making your resume?</h2>
        <p class="text-lg leading-relaxed mt-4 mb-4 text-blueGray-500">
          Don't let your resume hold you back from getting the job you want.
          Our powerful resume builder helps you create a resume that highlights your qualifications and lands you more
          interviews.
        </p>
      </div>
    </div>
  </section>

  <section class="block relative z-1 bg-blueGray-600">
    <div class="container mx-auto">
      <div class="justify-center flex flex-wrap">
        <div class="w-full lg:w-12/12 px-4 -mt-24">
          <div class="flex flex-wrap">
            <div class="w-full lg:w-4/12 px-4">
              <h5 class="text-xl font-semibold pb-4 text-center">
                <!-- Template Page 1 -->Professional Resume Template
              </h5>
              <a href="<?=$action->helper->url('login/1')?>">
                <div
                  class="hover:-mt-4 relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg ease-linear transition-all duration-150">
                  <img alt="..." class="align-middle border-none max-w-full h-auto rounded-lg"
                    src="Main_Home_Page/assets/img/22.png" />
                </div>
              </a>
            </div>

            <div class="w-full lg:w-4/12 px-4">
              <h5 class="text-xl font-semibold pb-4 text-center">
                <!-- Template Page 2 -->Creative Resume Template
              </h5>
              <a href="<?=$action->helper->url('login/1')?>">
                <div
                  class="hover:-mt-4 relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg ease-linear transition-all duration-150">
                  <img alt="..." class="align-middle border-none max-w-full h-auto rounded-lg"
                    src="Main_Home_Page/assets/img/resume_6.png" />
                </div>
              </a>
            </div>

            <div class="w-full lg:w-4/12 px-4">
              <h5 class="text-xl font-semibold pb-4 text-center">
                <!-- Template page 3 -->College Resume Template
              </h5>
              <a href="<?=$action->helper->url('login/1')?>">
                <div
                  class="hover:-mt-4 relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg ease-linear transition-all duration-150">
                  <img alt="..." class="align-middle border-none max-w-full h-auto rounded-lg"
                    src="Main_Home_Page/assets/img/resume_8(1).png" />
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-blueGray-600 overflow-hidden">
    <div class="container mx-auto pb-64">
      <div class="flex flex-wrap justify-center">
        <div class="w-full md:w-5/12 px-12 md:px-4 ml-auto mr-auto md:mt-64">
          <div
            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
            <i class="fas fa-code-branch text-xl"></i>
          </div>
          <h3 class="text-3xl mb-2 font-semibold leading-normal text-white">
            Free Online Resume Resources and Support.
          </h3>
          <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-400">
            Check out our free
            <a href="<?=$action->helper->url('login/1')?>" class="text-blueGray-300" target="_blank">
              Resume Examples
            </a>
            and other career resources to make the most of your job search.
            Stuck somewhere? We are here to answer
            your resume questions.
          </p>
          <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-400">
            We help with content suggestions and choosing the right design and layout,
            and you focus on presenting yourself.
          </p>
          <a href="https://www.linkedin.com/in/dhruv-joshi-838591250/" target="_blank"
            class="github-star mt-4 inline-block text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-blueGray-700 active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150">
            <i class="fab fa-linkedin text-lg mr-1"></i> Connect Now
            
          </a>
        </div>

        <div class="w-full md:w-4/12 px-4 mr-auto ml-auto mt-32 relative">
          <i class="fab fa-github text-blueGray-700 text-55 absolute -top-150-px -right-100 left-auto opacity-80"></i>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-16 bg-blueGray-200 relative pt-32">
    <div class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute h-20" style="transform: translateZ(0)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
        version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>

    <div class="container mx-auto">
      <div class="flex flex-wrap justify-center bg-white shadow-xl rounded-lg -mt-64 py-16 px-12 relative z-10">
        <div class="w-full text-center lg:w-8/12">
          <p class="text-4xl text-center">
            <span role="img" aria-label="love"> 😍 </span>
          </p>
          <h3 class="font-semibold text-3xl">
            Some Lovely Feedback From Our Clients..
          </h3>
          <p class="text-blueGray-500 text-lg leading-relaxed mt-4 mb-4">
            Hear from some of our amazing customers!!
          </p>
          <img src="Main_Home_Page/assets/img/review2.PNG" alt="" style="cursor: pointer;">
          <!--------feedbacks------->
          <!-- <section class="testimonials">
  <h1>What Our Student Says</h1>
  <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
<div class="row">
  <div class="testimonial-col">
    <img src="img/user5.jpg">
    <div>
              <p>I have recommended Resume Builder Software
         because it helps save time
          and creates an ATS friendly 
          resume.</p>
              <h3>Sakura Haruno</h3>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-o"></i>
    </div>
  </div>
  <div class="testimonial-col">
    <img src="img/user3.webp">
    <div>
              <p>Resume Builder Software has helped me a ton! It makes it easy to custom 
        tailor for different job 
        descriptions which gives an amazing edge in applications. 
        More power to you.</p>
              <h3>Minato Uzumaki</h3>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-half-o"></i>
    </div>
  </div>
</div>
</section> -->
          <div class="sm:block flex flex-col mt-10">
            <a href="<?=$action->helper->url('login/1')?>" target="_blank"
              class="get-started text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-2 bg-pink-500 active:bg-pink-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150">
              Get started
            </a>
            <a href="https://www.linkedin.com/in/dhruv-joshi-838591250/" target="_blank"
              class="github-star sm:ml-1 text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-blueGray-700 active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150">
              <i class="fab fa-linkedin text-lg mr-1"></i>
              <span>About Us</span>
            </a>
          </div>
          <div class="text-center mt-16"></div>
        </div>
      </div>
    </div>
  </section>
  <footer class="relative bg-blueGray-200 pt-8 pb-6">
    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
      style="transform: translateZ(0)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
        version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap text-center lg:text-left">
        <div class="w-full lg:w-6/12 px-4">
          <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
          <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
            Find us on any of these platforms, we respond working days.
          </h5>
          <div class="mt-6 lg:mb-0 mb-6">
            <button
              class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
              type="button">
              <i class="fab fa-twitter"></i>
            </button>
            <button
              class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
              type="button">
              <i class="fab fa-facebook-square"></i>
            </button>
            <button
              class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
              type="button">
              <i class="fab fa-instagram"></i>
              <!-- <i class="fa fa-dribbble"></i> -->
            </button>
            <button
              class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
              type="button">
              <i class="fab fa-github"></i>
            </button>
          </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex flex-wrap items-top mb-6">
            <div class="w-full lg:w-4/12 px-4 ml-auto">
              <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">
                Useful Links
              </span>
              <ul class="list-unstyled">
                <li>
                  <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                    href="https://www.linkedin.com/in/dhruv-joshi-838591250/">
                    About Us
                  </a>
                </li>
                <li>
                  <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                    href="<?=$action->helper->url('signup/1')?>">
                    Sign-Up
                  </a>
                </li>
                <li>
                  <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                    href="<?=$action->helper->url('login/1')?>">
                    Login
                  </a>
                </li>
                <li>
                  <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                    href="#home">
                    Home
                  </a>
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-4/12 px-4">
              <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">
                Other Resources
              </span>
              <ul class="list-unstyled">
                <li>
                  <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                    href="#">
                    Terms & Conditions
                  </a>
                </li>
                <li>
                  <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                    href="#">
                    Privacy Policy
                  </a>
                </li>
                <li>
                  <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                    href="https://www.linkedin.com/in/dhruv-joshi-838591250/">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-6 border-blueGray-300" />
      <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
          <div class="text-sm text-blueGray-500 font-semibold py-1">
            Copyright © <span id="get-current-year"></span> Resume Builder Software
            <!-- <a href="https://www.creative-tim.com?ref=njs-index" class="text-blueGray-500 hover:text-blueGray-800">
              Creative Tim
            </a> -->
            .
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
  /* Make dynamic date appear */
  (function () {
    if (document.getElementById("get-current-year")) {
      document.getElementById("get-current-year").innerHTML =
        new Date().getFullYear();
    }
  })();
  /* Function for opning navbar on mobile */
  function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
  }
  /* Function for dropdowns */
  function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "A") {
      element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(dropdownID), {
      placement: "bottom-start"
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
  }
</script>

</html>