<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/headfoot.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/pack.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/menu.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" >
        <link rel="stylesheet" href="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    </head>
    <body>
        <div class="hamburger"><button id="btn" onclick="myfun()"> ☰ </button>
            <nav id="navi">
                <ul>
                    <li> <a href ="home"> Home </a> </li>
                    <li> <a href ="test"> Tests </a> </li>
                    <li> <a href ="pack"> Packages </a> </li>
                    <li> <a href ="about"> About </a></li>
                    <li> <a href ="service"> Services </a></li>
                    <li> <a href ="#"> Login </a></li>
                    <li> <a href ="#"> Register </a></li>
                </ul>
            </nav>
        </div>
        <div class="container header">
            <div class="container header">
                <div class="row ">
                    <h2 class=" col-lg-3 col-9 my-3 " id="logo"><span class="bg-danger p-1">Smart</span><span class="mycolor p-1">Lab</span></h2>
                    <ul class="col-lg-9">
                        <li><a href=""><span class="p-1 bg-warning text-white">Register</span></a></li>
                        <li><a href=""><span class="mycolor p-1 text-white">Login</span></a></li>
                        <li><a href="service">Services</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="pack">Packages</a></li>
                        <li><a href="test">Test</a></li>
                        <li><a href="home">Home</a></li>                   
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="container my-3 ">
                <div class="row py-3">
                    <div class="link  col-12 col-lg-5">
                        <p class="gradient-text ml-3">Home / Tests</p>
                    </div>
                    <div class="input-group  col-12 col-lg-7">
                        <div class="form-outline">
                             <input type="search"  class="form-control ui-autocomplete-input" placeholder="Search for a Test"/>
                        </div>
                        <button type="button" class="btn bg-white border-none">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
            <div class="container">
                <div class="row">
                    <div data-aos="zoom-in" data-aos-duration="1000" class="packlist col-lg-6 col-12  my-3">
                        <div class=" test bg-light pt-3 pb-5 px-4">
                            <a href="">
                                <h4 class="text-danger">Master Diabeties Wellness <span class="text-muted">Pack</span></h4>
                                <h6 class="text-primary">Parameters included : 38 Tests , Fasting time : 12 hrs </h6>
                                <p class="text-dark">Introducing I-Path, an intelligent solution in the journey of Pathological tests an intelligent solution in the journey of </p>
                                <span class="book">Book  Now </span>
                            </a>
                            <span class="price text-white bg-danger  float-left">₹ 2,150.00 </span>
                        </div>
                    </div>   
                    <div data-aos="zoom-in" data-aos-duration="1000" class="packlist col-lg-6 col-12  my-3">
                        <div class=" test bg-light pt-3 pb-5 px-4">
                            <a href="">
                                <h4 class="text-danger">Master Diabeties Wellness <span class="text-muted">Pack</span></h4>
                                <h6 class="text-primary">Parameters included : 38 Tests , Fasting time : 12 hrs </h6>
                                <p class="text-dark">Introducing I-Path, an intelligent solution in the journey of Pathological tests an intelligent solution in the journey of </p>
                                <span class="book">Book  Now </span>
                            </a>
                            <span class="price text-white bg-danger  float-left">₹ 2,150.00 </span>
                        </div>
                    </div>   
                    <div data-aos="zoom-in" data-aos-duration="1000" class="packlist col-lg-6 col-12  my-3">
                        <div class=" test bg-light pt-3 pb-5 px-4">
                            <a href="">
                                <h4 class="text-danger">Master Diabeties Wellness <span class="text-muted">Pack</span></h4>
                                <h6 class="text-primary">Parameters included : 38 Tests , Fasting time : 12 hrs </h6>
                                <p class="text-dark">Introducing I-Path, an intelligent solution in the journey of Pathological tests an intelligent solution in the journey of </p>
                                <span class="book">Book  Now </span>
                            </a>
                            <span class="price text-white bg-danger  float-left">₹ 2,150.00 </span>
                        </div>
                    </div>   
                    <div data-aos="zoom-in" data-aos-duration="1000" class="packlist col-lg-6 col-12  my-3">
                        <div class=" test bg-light pt-3 pb-5 px-4">
                            <a href="">
                                <h4 class="text-danger">Master Diabeties Wellness <span class="text-muted">Pack</span></h4>
                                <h6 class="text-primary">Parameters included : 38 Tests , Fasting time : 12 hrs </h6>
                                <p class="text-dark">Introducing I-Path, an intelligent solution in the journey of Pathological tests an intelligent solution in the journey of </p>
                                <span class="book">Book  Now </span>
                            </a>
                            <span class="price text-white bg-danger  float-left">₹ 2,150.00 </span>
                        </div>
                    </div>   
                    <div data-aos="zoom-in" data-aos-duration="1000" class="packlist col-lg-6 col-12  my-3">
                        <div class=" test bg-light pt-3 pb-5 px-4">
                            <a href="">
                                <h4 class="text-danger">Master Diabeties Wellness <span class="text-muted">Pack</span></h4>
                                <h6 class="text-primary">Parameters included : 38 Tests , Fasting time : 12 hrs </h6>
                                <p class="text-dark">Introducing I-Path, an intelligent solution in the journey of Pathological tests an intelligent solution in the journey of </p>
                                <span class="book">Book  Now </span>
                            </a>
                            <span class="price text-white bg-danger  float-left">₹ 2,150.00 </span>
                        </div>
                    </div>   
                    <div data-aos="zoom-in" data-aos-duration="1000" class="packlist col-lg-6 col-12  my-3">
                        <div class=" test bg-light pt-3 pb-5 px-4">
                            <a href="">
                                <h4 class="text-danger">Master Diabeties Wellness <span class="text-muted">Pack</span></h4>
                                <h6 class="text-primary">Parameters included : 38 Tests , Fasting time : 12 hrs </h6>
                                <p class="text-dark">Introducing I-Path, an intelligent solution in the journey of Pathological tests an intelligent solution in the journey of </p>
                                <span class="book">Book  Now </span>
                            </a>
                            <span class="price text-white bg-danger  float-left">₹ 2,150.00 </span>
                        </div>
                    </div>   
                    <div data-aos="zoom-in" data-aos-duration="1000" class="packlist col-lg-6 col-12  my-3">
                        <div class=" test bg-light pt-3 pb-5 px-4">
                            <a href="">
                                <h4 class="text-danger">Master Diabeties Wellness <span class="text-muted">Pack</span></h4>
                                <h6 class="text-primary">Parameters included : 38 Tests , Fasting time : 12 hrs </h6>
                                <p class="text-dark">Introducing I-Path, an intelligent solution in the journey of Pathological tests an intelligent solution in the journey of </p>
                                <span class="book">Book  Now </span>
                            </a>
                            <span class="price text-white bg-danger  float-left">₹ 2,150.00 </span>
                        </div>
                    </div>   
                    <div data-aos="zoom-in" data-aos-duration="1000" class="packlist col-lg-6 col-12  my-3">
                        <div class=" test bg-light pt-3 pb-5 px-4">
                            <a href="">
                                <h4 class="text-danger">Master Diabeties Wellness <span class="text-muted">Pack</span></h4>
                                <h6 class="text-primary">Parameters included : 38 Tests , Fasting time : 12 hrs </h6>
                                <p class="text-dark">Introducing I-Path, an intelligent solution in the journey of Pathological tests an intelligent solution in the journey of </p>
                                <span class="book">Book  Now </span>
                            </a>
                            <span class="price text-white bg-danger  float-left">₹ 2,150.00 </span>
                        </div>
                    </div>   
                </div>
            </div>    
        </div>
        <div class="footer mt-5 mycolor"  data-aos="zoom-out-down" data-aos-duration="1000">
            <div class="container">
              <div class="row pt-5 pl-4">
                <div class="col-lg-4 col-12 footer-link">
                  <i class="fa fa-mortar-board"></i>
                  <h2>MSD</h2><br>
                  <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                  <div class="bottom-icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-12 footer-contact">
                  <h2>Contact Us</h2>
                  
                  <p><i class="fa fa-map-marker"></i>503 Old Buffalo Street Northwest #205, New York-3087.</p>
                  
                  <p><i class="fa fa-phone"></i>+821 (2365) 456 90</p>
                  
                  <p><i class="fa fa-envelope"></i>support@gmail.com</p>
                </div>
                 <div class="col-lg-11 col-12 footer-contact ">
                  <hr class="border border-top-white">
                 </div>
              </div>
              
            </div>
            <footer>
                <div class="footer-copyright text-center py-3">© 2021 Copyright:
                   <a href="#"> MDBootstrap.com</a>
                </div>
           </footer>
          </div>
        @yield('scripts')
        <script>
            window.onscroll = function() {scrollFunction()};
             function scrollFunction() {
                 if(window.innerWidth<600)
                 {
                     document.getElementById("btn").style.display = "block";
                     
                 }
                 else
                 {
                     if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10)
                     {
                         document.getElementById("btn").style.display = "block";
                         document.getElementById("logo").style.position = "fixed";
                     } else {
                         document.getElementById("btn").style.display = "none";
                         document.getElementById("logo").style.position = "relative";
 
                     }
                 }
                 
                 
             }
             function myfun()
             {
               const btn=document.getElementById("btn");
               const navi=document.getElementById("navi");
               navi.classList.toggle("active");
               btn.classList.toggle("active");
             }
          
             
           </script>
          <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
          <script>
            AOS.init();
          </script>
        </body>
</html>