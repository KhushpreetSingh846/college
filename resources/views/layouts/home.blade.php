@extends('layouts.welcome')


@section('homepage-content')
    <div class="conatiner-fluid ">
      <div class="container py-5 mb-5">
        <div class="row main-head" >
          <div data-aos="fade-down-right" data-aos-duration="1000" class="col-lg-6 col-12 home-heading animate-up" >
            <h1>Futuristic Pathology</h1>
            <p>"Introducing I-Path, an intelligent solution in the journey of Pathological tests."</p>               
            <h3>Book Appiontment</h3>
            <div class="input-group">
              <div class="form-outline">
                <input type="search"  class="form-control ui-autocomplete-input" placeholder="Search for a Test"/>
              </div>
              <button type="button" class="btn mycolor mx-1">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
          <div class="home-image col-lg-6 col-12">
              <img src="{{URL::asset('images/1.jpg')}}" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mycolor work  pt-1">
      <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="500" class="gradient-text py-5 font-weight-bold text-center">How it works </h1>
        <div class="row">
            
            <div data-aos="fade-up" data-aos-duration="500" class="col-lg-6  work-image animate-left">
              <img src="{{URL::asset('images/f1.jpg')}}">
            </div>
            
            <div class="col-lg-6 work-list">
              <ul class="list-unstyled">
                <li data-aos="fade-up" data-aos-duration="1000" class="list-item active">
                    <a href="">
                      <h4>Upload Prescriptions</h4>
                      <p>Order from your prescription & get a generous discount.</p>
                    </a>
                </li>
                <li data-aos="fade-up" data-aos-duration="1000" class="list-item">
                  <a href="">
                    <h4>Book Online</h4>
                    <p>You can select Lab tests or health packages from the catalog. </p>
                  </a>
                </li>
                <li data-aos="fade-up" data-aos-duration="1000" class="list-item">
                  <a href="">
                    <h4>Sample @ Doorsteps</h4>
                    <p>A qualified phlebotomist will collect samples.</p>
                  </a>
                </li>
                <li data-aos="fade-up" data-aos-duration="1000" class="list-item">
                  <a href="">
                    <h4>Online Reports</h4>
                    <p>Reports go online instantly after receiving the result from certified labs.</p>
                  </a>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>

    <div class="container-fluid ">
      <div class="container offer">
        <h1 data-aos="fade-up" data-aos-duration="1000" class="gradient-text py-5">What SmartLab Offers</h1>
        <p data-aos="fade-up" data-aos-duration="1000" >You can book an appointment with us over the phone or online. Our well qualified and experienced technician will be there at the comfort of your home. He will collect the sample for pathological tests and other necessary Diagnostic examination. You can also visit our collection center and give samples</p>
        <div class="row text-center">
            <div data-aos="zoom-out-up" data-aos-duration="1000" class="card col-lg-2">
              <div class="card-body ">
                <i class="fa fa-file  text-warning fa-3x"></i>
                <h5 class="card-title py-3">Lab Tests</h5>
                <p class="card-text gradient-text">We have a wide variety of tests for almost every health condition.</p>
              </div>
            </div>   
            <div data-aos="zoom-out-up" data-aos-duration="1000" class="card col-lg-2">
              <div class="card-body ">
                <i class="fa fa-file-text  text-success fa-3x"></i>
                <h5 class="card-title py-3">Packages</h5>
                <p class="card-text gradient-text">We have a wide variety of tests for almost every health condition.</p>
              </div>
            </div> 
            <div data-aos="zoom-out-up" data-aos-duration="1000" class="card col-lg-2">
              <div class="card-body ">
                <i class="fa fa-file-o  text-danger fa-3x"></i>
                <h5 class="card-title py-3">Categories</h5>
                <p class="card-text gradient-text">We have a wide variety of tests for almost every health condition.</p>
              </div>   
           </div>
           <div data-aos="zoom-out-up" data-aos-duration="1000" class="card col-lg-2">
            <div class="card-body ">
              <i class="fa fa-user-o  text-info fa-3x"></i>
              <h5 class="card-title py-3">Beneficiaries</h5>
              <p class="card-text gradient-text">We have a wide variety of tests for almost every health condition.</p>
            </div>   
          </div>
       </div>
      </div>
    </div>
    
    <div class="container condition">
      <h1 class="gradient-text" data-aos="fade-up" data-aos-duration="1000">Tests by conditions</h1>
      <div class="slider owl-carousel text-center my-5"  data-aos="fade-up" data-aos-duration="1000">
          <a href="">
            <div class="cards" >
              <div class="img mx-auto">
                <img src="{{URL::asset('images/heart.jpg')}}">
              </div>
              <p>Heart</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/brain.jpg')}}">
              </div>
              <p>brain</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/bones.jpg')}}">
              </div>
              <p>bones</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/anemia.jpg')}}">
              </div>
              <p>anemia</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/brain.jpg')}}">
              </div>
              <p>brain</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/diabeties.jpg')}}">
              </div>
              <p>diabeties</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/hyper.jpg')}}">
              </div>
              <p>hyper</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/immunity.jpg')}}">
              </div>
              <p>immunity</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/kidney.jpg')}}">
              </div>
              <p>kidney</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/liver.jpg')}}">
              </div>
              <p>liver</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/thyroid.jpg')}}">
              </div>
              <p>thyroid</p>
            </div>
          </a>
          <a href="">
            <div class="cards">
              <div class="img mx-auto">
                <img src="{{URL::asset('images/obesity.jpg')}}">
              </div>
              <p>obesity</p>
            </div>
          </a>
      </div>
    </div>
    
    <div class="container-fluid mycolor">
      <div class="container">
        <h1 class="gradient-text pt-5 font-weight-bold text-center"  data-aos="zoom-in" data-aos-duration="1000">Featured Tests</h1>
        <div class="row" data-aos="zoom-in" data-aos-duration="1000">
          <div class="card text-center col-lg-2 mx-3 my-5"  data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">TSH</h4>
              <h3 class="card-title font-weight-bold text-primary"><sup>₹</sup>900.00</h3>
              <p class="card-title font-weight-bold text-danger mb-4"><sup>₹</sup>1900.00</p>
              <span class="mycolor px-3 py-1  ">View</span>
            </div>
          </div>
          <div class="card text-center col-lg-2 mx-3 my-5"  data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">TSH</h4>
              <h3 class="card-title font-weight-bold text-primary"><sup>₹</sup>900.00</h3>
              <p class="card-title font-weight-bold text-danger mb-4"><sup>₹</sup>1900.00</p>
              <span class="mycolor px-3 py-1  ">View</span>
            </div>
          </div>
          <div class="card text-center col-lg-2 mx-3 my-5"  data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">TSH</h4>
              <h3 class="card-title font-weight-bold text-primary"><sup>₹</sup>900.00</h3>
              <p class="card-title font-weight-bold text-danger mb-4"><sup>₹</sup>1900.00</p>
              <span class="mycolor px-3 py-1  ">View</span>
            </div>
          </div>
          <div class="card text-center col-lg-2 mx-3 my-5" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">TSH</h4>
              <h3 class="card-title font-weight-bold text-primary"><sup>₹</sup>900.00</h3>
              <p class="card-title font-weight-bold text-danger mb-4"><sup>₹</sup>1900.00</p>
              <span class="mycolor px-3 py-1  ">View</span>
            </div>
          </div>
          <div class="card text-center col-lg-2 mx-3 my-5" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">TSH</h4>
              <h3 class="card-title font-weight-bold text-primary"><sup>₹</sup>900.00</h3>
              <p class="card-title font-weight-bold text-danger mb-4"><sup>₹</sup>1900.00</p>
              <span class="mycolor px-3 py-1  ">View</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container habit">
      <h1 class="gradient-text text-center font-weight-bold my-5"  data-aos="fade-up" data-aos-duration="1000">Tests by Habits</h1>
      <div class="slider owl-carousel text-center my-5"  data-aos="fade-up" data-aos-duration="1000">
        <a href="">
          <div class="cards">
            <div class="img ">
              <img src="{{URL::asset('images/habits/anger.jpg')}}">
            </div>
            <p>anger</p>
          </div>
        </a>
        <a href="">
          <div class="cards">
            <div class="img ">
              <img src="{{URL::asset('images/habits/drink.jpg')}}">
            </div>
            <p>drink</p>
          </div>
        </a>
        <a href="">
          <div class="cards">
            <div class="img ">
              <img src="{{URL::asset('images/habits/exercise.jpg')}}">
            </div>
            <p>zero exercise</p>
          </div>
        </a>
        <a href="">
          <div class="cards">
            <div class="img">
              <img src="{{URL::asset('images/habits/food.jpg')}}">
            </div>
            <p>junk food</p>
          </div>
        </a>
        <a href="">
          <div class="cards">
            <div class="img">
              <img src="{{URL::asset('images/habits/nutri.jpg')}}">
            </div>
            <p>poor nutrition</p>
          </div>
        </a>
        <a href="">
          <div class="cards">
            <div class="img ">
              <img src="{{URL::asset('images/habits/sleep.jpg')}}">
            </div>
            <p>less sleep</p>
          </div>
        </a>
        <a href="">
          <div class="cards">
            <div class="img">
              <img src="{{URL::asset('images/habits/smoke.jpg')}}">
            </div>
            <p>smoking</p>
          </div>
        </a>
        <a href="">
          <div class="cards">
            <div class="img ">
              <img src="{{URL::asset('images/habits/stress.jpg')}}">
            </div>
            <p>stress</p>
          </div>
        </a>
      </div>
    </div>

    <div class="container-fluid mycolor">
      <div class="container">
        <h1 class="gradient-text pt-5 font-weight-bold text-center"  data-aos="zoom-in" data-aos-duration="1000">Featured Tests</h1>
        <div class="row"  data-aos="zoom-in" data-aos-duration="1000">
          <div class="card text-center col-lg-2 mx-3 my-5" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">TSH</h4>
              <h3 class="card-title font-weight-bold text-primary"><sup>₹</sup>900.00</h3>
              <p class="card-title font-weight-bold text-danger mb-4"><sup>₹</sup>1900.00</p>
              <span class="mycolor px-3 py-1  ">View</span>
            </div>
          </div>
          <div class="card text-center col-lg-2 mx-3 my-5" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">TSH</h4>
              <h3 class="card-title font-weight-bold text-primary"><sup>₹</sup>900.00</h3>
              <p class="card-title font-weight-bold text-danger mb-4"><sup>₹</sup>1900.00</p>
              <span class="mycolor px-3 py-1  ">View</span>
            </div>
          </div>
          <div class="card text-center col-lg-2 mx-3 my-5" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">TSH</h4>
              <h3 class="card-title font-weight-bold text-primary"><sup>₹</sup>900.00</h3>
              <p class="card-title font-weight-bold text-danger mb-4"><sup>₹</sup>1900.00</p>
              <span class="mycolor px-3 py-1  ">View</span>
            </div>
          </div>
          <div class="card text-center col-lg-2 mx-3 my-5" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">TSH</h4>
              <h3 class="card-title font-weight-bold text-primary"><sup>₹</sup>900.00</h3>
              <p class="card-title font-weight-bold text-danger mb-4"><sup>₹</sup>1900.00</p>
              <span class="mycolor px-3 py-1  ">View</span>
            </div>
          </div>
          <div class="card text-center col-lg-2 mx-3 my-5" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
              <h4 class="card-subtitle mb-2 text-muted">TSH</h4>
              <h3 class="card-title font-weight-bold text-primary"><sup>₹</sup>900.00</h3>
              <p class="card-title font-weight-bold text-danger mb-4"><sup>₹</sup>1900.00</p>
              <span class="mycolor px-3 py-1  ">View</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid ">
      <h1 class="font-weight-bold gradient-text text-center pt-5"  data-aos="fade-up" data-aos-duration="1000">Testimonials</h1>
      <div class="demo">
        <div class="container">
            <div class="row"  data-aos="fade-up" data-aos-duration="1500">
                <div class="col-lg-offset-2 col-12 ">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                          <p class="description ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                          </p>
                          <h3 class="title">williamson</h3>
                          <span class="post">Pathologist</span>
                        </div>     
                        <div class="testimonial">
                          <p class="description ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                          </p>
                          <h3 class="title">williamson</h3>
                          <span class="post">Pathologist</span>
                        </div>
                        <div class="testimonial">
                          <p class="description ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                          </p>
                          <h3 class="title">williamson</h3>
                          <span class="post">Pathologist</span>
                        </div>
                        <div class="testimonial">
                          <p class="description ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                          </p>
                          <h3 class="title">williamson</h3>
                          <span class="post">Pathologist</span>
                        </div>
                        <div class="testimonial">
                          <p class="description ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                          </p>
                          <h3 class="title">williamson</h3>
                          <span class="post">Pathologist</span>
                        </div>
                        <div class="testimonial">
                          <p class="description ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                          </p>
                          <h3 class="title">williamson</h3>
                          <span class="post">Pathologist</span>
                        </div>
                        <div class="testimonial">
                          <p class="description ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                          </p>
                          <h3 class="title">williamson</h3>
                          <span class="post">Pathologist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    
    
  
    <!-- Quick enquiry -->
		<div class="container mt-5">
			<div class="quick">
				<div class="quick-inner">
					<div class="row">
						<div class="col-lg-7 col-12 quick-contact text-center"  data-aos="zoom-out-right" data-aos-duration="1000">
							<h1>For Quick Enquiry Contact Us</h1>
							
							<p><i class="fa fa-phone"></i>+ 1800 190 23141</p>
							
							<p><i class="fa fa-phone"></i>+ 1800 190 23141</p>
							
							<p><i class="fa fa-envelope"></i>support@gmail.com</p>
							
							<p><i class="fa fa-envelope"></i>support@gmail.com</p>
						</div>
						<div class="col-lg-4 col-11 quick-form"  data-aos="zoom-out-left" data-aos-duration="1000">
              <p class="text-uppercase font-weight-bold">Join Us</p>
              <h2 class="font-weight-bold mb-3">Talk With Our Expert</h2>
              <form>
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control" id="exampleInputName"
                  placeholder="Enter Your Name">
                </div>
								<div class="form-group">
                  <label for="exampleInputName">Phone number</label>
                  <input type="text" class="form-control" id="exampleInputName"
                  placeholder="Enter Your Phone number">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1"
                  placeholder="Enter Your Email">
                </div>
                <button type="submit" class="btn read-more">Let's Start To  Talk</button>
              </form>
            </div>
					</div>
				</div>
			</div>
		</div>
    
  
  
  
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/owl.carousel.min.js"> </script>

<script>
  $(".slider").owlCarousel({
    loop:true,
    autoplay:true,
    margin:7.7,
    autoplayHoverPause: true, 
    autoWidth:true,
    zIndex:-1,
    
  });
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
});
</script>
@endsection