<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/headfoot.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/service.css') }}">
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
                    <li> <a href ="home/test"> Tests </a> </li>
                    <li> <a href ="home/pack"> Packages </a> </li>
                    <li> <a href ="home/about"> About </a></li>
                    <li> <a href ="home/service"> Services </a></li>
                    @if (Route::has('login'))
                
                            @auth
                            <li><a href="{{ url('/home') }}" >Home</a></li>
                            @else
                            <li><a href="{{ route('login') }}" >Log in</a></li>

                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" >Register</a></li>
                                @endif
                            @endauth
                    
                    @endif

                </ul>
            </nav>
        </div>
        <div class="container header">
            <div class="container header">
                <div class="row ">
                    <h2 class=" col-lg-3 col-9 my-3 " id="logo"><span class="bg-danger p-1">Smart</span><span class="mycolor p-1">Lab</span></h2>
                    <ul class="col-lg-9">
                        @if (Route::has('login'))
                
                                @auth
                                <li><a href="{{ url('/home') }}" >Home</a></li>
                                @else
                                <li><a href="{{ route('login') }}" ><span class="bg-warning p-1 text-white">Login</span></a></li>

                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" ><span class="mycolor p-1 text-white">Register</span></a></li>
                                    @endif
                                @endauth
                        
                        @endif   
                        <li><a href="home/service">Services</a></li>
                        <li><a href="home/about">About</a></li>
                        <li><a href="home/pack">Packages</a></li>
                        <li><a href="home/test">Test</a></li>
                        <li><a href="home/home">Home</a></li>                   
                    </ul>
                </div>
            </div>
        </div>
                   
        <div class="container-fluid bg-light">
            <div class="container my-3 ">
                <div class="row py-3">
                    <div class="link  col-12 col-lg-5">
                        <p class="gradient-text ml-3">Home / Services</p>
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
            <div class="row ">
                <div class="col-12 col-lg-6 service-img mt-5" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{URL::asset('images/s1.jpg')}}" >
                </div>
                <div class="col-lg-6 col-12">
                    <h2 class="gradient-text text-center" data-aos="zoom-in" data-aos-duration="1000">Why the Intelligent Pathology (I-Path) lab should be a demand of the day? </h2>
                    <p class="text-muted text-justify ml-2" data-aos="fade-up" data-aos-duration="1000">In this techno-prone busy world, the Pathological test process needs updating, the one which could cope up with the present scenario. And here we are with the concept of I-path laboratories. To bolster the idea, why it is in increasing demand is paraphrased below.</p>
                    <p class="text-muted ml-2 text-justify" data-aos="fade-up" data-aos-duration="1000"><span class="text-dark font-weight-bold">Saves time : </span> In the hustle and bustle of day to day life, time is the most precious thing for each and every one of us. The biggest challenge an individual has to face is to take out time, be it for your near and dear ones or one’s own self. Amidst this state of affairs, spending the whole day in a health care center or hospital becomes a daunting task. Usually, it starts with waiting in a queue to get your sample collected, again a visit is needed to get the reports, and then a visit to the doctor to show the reports. In this modern world, something better has to be adopted. Our state of the art centers with the latest equipment and inventive facilities identify and bridge this gap.</p>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="text-muted ml-2 text-justify" data-aos="fade-up" data-aos-duration="1000"><span class="text-dark font-weight-bold">Tests with prescriptions: </span>  For this feature, you just need to upload a prescription and the rest is taken care of by janchwala.com. Our professionals are well-trained and know how to get the job done.</p>
                    <p class="text-muted ml-2 text-justify" data-aos="fade-up" data-aos-duration="1000"><span class="text-dark font-weight-bold">Pre-defined packages: </span>  We provide many pre-defined packages. These packages are prepared to keep in mind the condition and ailment of the patient. Relevant tests are grouped together to make a package. Like, there are a number of tests grouped under a category for those suffering from cardiac-related issues.</p>
                    <p class="text-muted ml-2 text-justify" data-aos="fade-up" data-aos-duration="1000"><span class="text-dark font-weight-bold">Beneficiaries: </span>   Not only for yourself but you can also book for your family members and friends.</p>

                </div>
                <div class="col-12 col-lg-6 service-img" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{URL::asset('images/s2.jpg')}}" >
                </div>
                <div class="col-12 ml-2 text-muted" data-aos="fade-up" data-aos-duration="1000">
                    <span class="text-dark font-weight-bold" data-aos="fade-up" data-aos-duration="1000">What SMARTLAB has for its clients ... </span>
                    <p class="text-muted text-justify" data-aos="fade-up" data-aos-duration="1000">You can book an appointment with us over the phone or online. Our well qualified and experienced technician will be there at the comfort of your home. He will collect the sample for pathological tests and other necessary Diagnostic examination. You can also visit our collection center and give samples.</p>
                    <p class="text-muted text-justify" data-aos="fade-up" data-aos-duration="1000"><span class="text-dark font-weight-bold">Lab Tests </span>  We have a wide variety of tests for almost every health condition. Just search for the test you want. Additional features:
                        <ul class="ml-5" data-aos="fade-up" data-aos-duration="1000">
                            <li>You will get an overview of what the test is all about.</li>
                            <li>The sample type will be specified. It means you will come to know if the technician wants your blood, urine, or any other specimen.</li>
                            <li>A list of frequently booked tests will be displayed on the side in case the patient needs any guidance.</li>
                            <li>There is the precaution section which focuses on the special preparation required before the test.</li>
                            <li>You can choose the time for the test. Also, use the location option to view if the required test is available at your preferred location.</li>
                            <li>You can also choose yourself the tests categorized as:
                                <ul class="ml-5">
                                    <li>Disease/Condition</li>
                                    <li>Health Risk-areas</li>
                                    <li>Organ wise</li>
                                </ul>
                            </li>
                        </ul>
                    </p>
                    <p class="text-muted text-justify" data-aos="fade-up" data-aos-duration="1000"><span class="text-dark font-weight-bold">Packages :</span>  Here you will get the pre-defined packages of various interrelated tests. Additional features:
                        <ul class="ml-5" data-aos="fade-up" data-aos-duration="1000">
                            <li>Overview of the tests included in the selected package is also provided. Like what the package is all about.</li>
                            <li>The precaution section focuses on the special preparations required before a particular test.</li>
                            <li>A list of various tests included in the package will be displayed.</li>
                            <li>Packages could be sorted in either of the two ways:
                                <ul class="ml-5">
                                    <li>Alphabetically (A-Z or vice versa)</li>
                                    <li>Pricing (Ascending and Descending)</li>
                                </ul>
                            </li>
                            <li>Additional information helps you by digging a little deeper and providing you with some in-depth study.</li>
                        </ul>
                    </p>
                    <p class="text-muted text-justify" data-aos="fade-up" data-aos-duration="1000"><span class="text-dark font-weight-bold">Categories :</span>  For the categories such as fatigue, loss of weight, hypertension...You will get the tests and pre-configured packages of various interrelated tests category wise.
                        <ul class="ml-5" data-aos="fade-up" data-aos-duration="1000">
                            <li>Choose the category as you wish.</li>
                            <li>A list of tests and packages will appear according to the chosen category.</li>
                            <li>This will also display the recommended test for the patients falling under that category.</li>
                            <li>You can view the details of a test or package listed by simply clicking on details.</li>
                        </ul>
                    </p>
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