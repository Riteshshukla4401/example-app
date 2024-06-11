<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slick-theme.css')}}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <body class="vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3">
      <div class="container">
        <div class="logo-img">
          <a class="navbar-brand " href="#">
           <img src="img/Mayur-Logo.jpg" alt="logo-img">
          </a>
        </div>
        <button class="navbar-toggler showdow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <!--side bar-->   
        
        <div class="offcanvas offcanvas-start bg-black" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <!--sidebar header-->
          <div class="offcanvas-header text-white border-bottom">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <!--side body-->
          <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
            <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
              <li class="nav-item mx-2">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item max-2">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item max-2">
                <a class="nav-link" href="#Service">Service</a>
              </li>
              <li class="nav-item max-2">
                <a class="nav-link" href="#Contact">Contact</a>
              </li>
            </ul>
            <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
              <a href="#login" class="text-black text-decoration-none" onclick="document.getElementById('id01').style.display='block'" >Login</a>
              <a href="#SignUp" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background:rgba(131, 11, 11, 0.987)">Sign Up</a>
            </div>
            
          </div>
        </div>
      </div>
    </nav>

    <div class="home-line d-flex align-items-center justify-content-start">
      <div class="container ">
          <div class="d-flex f-wrap justify-content-between align-items-center">
              <p class="text-white mb-0">Hotel Mayur, Haridwar</p>
              <div class="d-flex f-wrap">
                  <p class="d-flex align-items-center text-white mb-0"><i class="ph-fill ph-phone"></i><a href="tel:01334 227586">
                          01334 227586</a> | <a href="tel:+91 9917738868">+919917738868</a>
                  </p>
                  <p class="ps-md-5 d-flex align-items-center mb-0"><i class="ph-fill ph-envelope-open"></i><a href="mailto: info@hotelmayurharidwar.com">info@hotelmayurharidwar.com</a>
                  </p>
              </div>
          </div>
      </div>
  </div>

    {{-- <section id="start-banners">
      <div class="container h-100">
        <div class="row h-100">
          <div class="banner col-sm-6">
            <div class="banner-text h-100 d-flex flex-column align-items-stert justify-content-center">
              <h1>Latest Tranding</h1>
              <h3>Fashion Wear</h3>
              <div class="banner-btn">
                <button type="button" class="btn mt-3" id="bttn">SHOP Now</button>
              </div>
            </div>  
            </div>
            <div class="col">
              
            </div>
          </div>
        </div>
    </section> --}}
    <section class="section-one">
      <video autoplay="" muted="" loop="" id="myVideo">
          <source src="/img/haridwar.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
      </video>
  </section>
  <section class="address py-3 ">
    <div class="container">
      <div class="d-sm-flex justify-content-between align-items-center">
        <ul>
          <li class="py-1 text-white">Hotel Mayur</li>
          <li class="py-1 text-white">Opposite to Mansa Devi Ropeway,</li>
          <li class="py-1 text-white">Upper Road, Haridwar - 249401</li>
        </ul>
        <Ul>
          <li class="py-1"><a href="01334 227586 | +91 9917738868"> 01334 227586 | +91 9917738868</a></li>
          <li class="py-1"><a href="info@hotelmayurharidwar.com">info@hotelmayurharidwar.com</a></li>
          <li class="py-1"><a href="deepakagarwal.mayur@gmail.com">deepakagarwal.mayur@gmail.com</a></li>
        </Ul>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container text-center">
      <h2>Namaste!!</h2>
      <h2>Hotel Mayur welcomes you in Haridwar!!</h2>
      <p class="">Considered as one of the holiest places in India, Haridwar, the Gateway to the Gods, is
        believed to give
        you every sense
        of spiritual fulfilment. Adding to this, Hotel Mayur immensely devote itself and fulfil your desires for
        cultural stay,
        at reasonable prices.
        Situated in the heart of the city, the Hotel is just opposite to Mansa Devi Ropeway, near sacred Har ki
        Pauri and just a
        milestone away from city Railway station and Bus Stand… <a href="#">READ MORE</a>
    </p>
    <img src="img/Mayur-Logo.jpg" alt="" class="abouts-logo">
    </div>
  </section>
    <section class="service pb-5">
      <div class="container text-center">
        <h2 class="heading pb-3 fw-900 position-relative">Leisure facilities we serve</h2>
        <div class="row">
          <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card-container">
              <div class="service-icon">
                <img src="img/table-etiquettes.png " alt="" class="serives-icon sicon1">
                <img src="img/table-etiquette.png" alt="" class="serives-icon sicon2"> 
              </div>
              <p>In Room Dining</p>
            </div>
       </div> 
          <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card-container">
              <div class="service-icon">
                <img src="img/credit-cards.png " alt="" class="serives-icon sicon1">
                <img src="img/credit-card.png" alt="" class="serives-icon sicon2"> -
              </div>
              <p>Travel Desk</p>
            </div>
          </div>
          <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card-container">
              <div class="service-icon">
                <img src="img/serving-dish.png " alt="" class="serives-icon sicon1">
                <img src="img/serving-dishs.png" alt="" class="serives-icon sicon2"> 
              </div>
              <p>24-Hour Room Service</p>
            </div>
          </div>
          <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card-container">
              <div class="service-icon">
                <img src="img/emergency-call.png " alt="" class="serives-icon sicon1">
                <img src="img/emergency-calls.png" alt="" class="serives-icon sicon2"> 
              </div>
              <p>Lift</p>
            </div>
          </div>
          <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card-container">
              <div class="service-icon">
                <img src="img/elevator.png " alt="" class="serives-icon sicon1">
                <img src="img/elevators.png" alt="" class="serives-icon sicon2"> 
              </div>
              <p>All Card Accepted</p>
            </div>
          </div>
          <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card-container">
              <div class="service-icon">
                <img src="img/table-etiquettes.png " alt="" class="">
                {{-- <img src="" alt="" class=""> --}}
              </div>
              <p>Doctor on Call</p>
            </div>
          </div>
          

        </div>
      </div>
    </section>
    

<section class="rate">
        <div class="container text-center">
            <h2 class="heading pb-5 position-relative fw-900">Enjoy the pleasure of staying with us</h2>
            <div>
                <div id="myBtnContainer" class="text-center">
                    <button class="btn1 active1" onclick="filterSelection('all')" fdprocessedid="6w04gr"> All</button>
                    <button class="btn1" onclick="filterSelection('deluxe')" fdprocessedid="y1u8ip"> Deluxe</button>
                    <button class="btn1" onclick="filterSelection('luxury')" fdprocessedid="tp2woj">Luxury</button>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 column p-xl-  p-3 deluxe show">
                        <div class="content text-center  h-100 position-relative" onclick="location.href='./room-page/del-double.html'">
                            <div class="imgcont position-relative">
                                <img src="./img/bedroom-hotel.jpg" alt="img" class="img-fluid">
                                <button class="pricebtn" fdprocessedid="1elt8">₹ 500</button>
                            </div>
                            <div class="px-3">
                                <h5 class="py-2">DOUBLE BED <br>
                                    DELUXE ROOM
                                </h5>
                                <p>Queen Bed | Cooler | Road facing Views</p>
                                <p>Complimentary Breakfast</p>
                                <hr class="my-1">
                                <div>
                                    <div class="flex-all-prop py-2">
                                        <div class="flex-all-prop">
                                            <i class="ph ph-user px-2"></i>
                                            <p>5</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-bed px-2"></i>
                                            <p>2</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-ruler px-2"></i>
                                            <p>75 M<sup>2</sup></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 column p-xl-  p-3 deluxe show">
                        <div class="content text-center  h-100 position-relative" onclick="location.href='./room-page/del-triple.html'">
                            <div class="imgcont position-relative">
                                <img src="./img/bedroom-hotel.jpg" alt="img" class="img-fluid">
                                <button class="pricebtn" fdprocessedid="60kjke">₹ 500</button>
                            </div>
                            <div class="px-3">
                                <h5 class="py-2">TRIPLE BED <br>
                                    DELUXE ROOM
                                </h5>
                                <p>1 Queen Bed | 1 Single Bed | Cooler</p>
                                <p>Complimentary Breakfast</p>
                                <hr class="my-1">
                                <div>
                                    <div class="flex-all-prop py-2">
                                        <div class="flex-all-prop">
                                            <i class="ph ph-user px-2"></i>
                                            <p>5</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-bed px-2"></i>
                                            <p>2</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-ruler px-2"></i>
                                            <p>75 M<sup>2</sup></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 column p-xl-  p-3 deluxe show">
                        <div class="content text-center  h-100 position-relative" onclick="location.href='./room-page/del-four.html'">
                            <div class="imgcont position-relative">
                                <img src="./img/bedroom-hotel.jpg" alt="img" class="img-fluid">
                                <button class="pricebtn" fdprocessedid="6gw0c1">₹ 500</button>
                            </div>
                            <div class="px-3">
                                <h5 class="py-2">FOUR BED <br>
                                    DELUXE ROOM
                                </h5>
                                <p>2 King Beds | Cooler | Amazing Views</p>
                                <p>Complimentary Breakfast</p>
                                <hr class="my-1">
                                <div>
                                    <div class="flex-all-prop py-2">
                                        <div class="flex-all-prop">
                                            <i class="ph ph-user px-2"></i>
                                            <p>5</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-bed px-2"></i>
                                            <p>2</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-ruler px-2"></i>
                                            <p>75 M<sup>2</sup></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 column p-xl-  p-3 luxury show">
                        <div class="content text-center  h-100 position-relative" onclick="location.href='./room-page/lux-double.html'">
                            <div class="imgcont position-relative">
                                <img src="./img/bedroom-hotel.jpg" alt="img" class="img-fluid">
                                <button class="pricebtn" fdprocessedid="bebbj">₹ 500</button>
                            </div>
                            <div class="px-3">
                                <h5 class="py-2">DOUBLE BED <br>
                                    LUXURY ROOM
                                </h5>
                                <p>Queen Bed | Air Conditioner | Market facing Views</p>
                                <p>Complimentary Breakfast</p>
                                <hr class="my-1">
                                <div>
                                    <div class="flex-all-prop py-2">
                                        <div class="flex-all-prop">
                                            <i class="ph ph-user px-2"></i>
                                            <p>5</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-bed px-2"></i>
                                            <p>2</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-ruler px-2"></i>
                                            <p>75 M<sup>2</sup></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 column p-xl-  p-3 luxury show">
                        <div class="content text-center  h-100 position-relative" onclick="location.href='./room-page/lux-triple.html'">
                            <div class="imgcont position-relative">
                                <img src="./img/bedroom-hotel.jpg" alt="img" class="img-fluid">
                                <button class="pricebtn" fdprocessedid="skzew">₹ 500</button>
                            </div>
                            <div class="px-3">
                                <h5 class="py-2">TRIPLE BED <br>
                                    LUXURY ROOM
                                </h5>
                                <p>1 Queen Bed, 1 Single Bed, Air Conditioner</p>
                                <p>Complimentary Breakfast</p>
                                <hr class="my-1">
                                <div>
                                    <div class="flex-all-prop py-2">
                                        <div class="flex-all-prop">
                                            <i class="ph ph-user px-2"></i>
                                            <p>5</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-bed px-2"></i>
                                            <p>2</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-ruler px-2"></i>
                                            <p>75 M<sup>2</sup></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 column p-xl-  p-3 luxury show">
                        <div class="content text-center  h-100 position-relative" onclick="location.href='./room-page/lux-four.html'">
                            <div class="imgcont position-relative">
                                <img src="./img/bedroom-hotel.jpg" alt="img" class="img-fluid">
                                <button class="pricebtn" fdprocessedid="5zt0bl">₹ 500</button>
                            </div>
                            <div class="px-3">
                                <h5 class="py-2">FOUR BED <br>
                                    LUXURY ROOM
                                </h5>
                                <p>2 King Beds | AC | Air Conditioner</p>
                                <p>Complimentary Breakfast</p>
                                <hr class="my-1">
                                <div>
                                    <div class="flex-all-prop py-2">
                                        <div class="flex-all-prop">
                                            <i class="ph ph-user px-2"></i>
                                            <p>5</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-bed px-2"></i>
                                            <p>2</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-ruler px-2"></i>
                                            <p>75 M<sup>2</sup></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 column p-xl-  p-3 luxury show">
                      <div class="content text-center  h-100 position-relative" onclick="location.href='./room-page/lux-four.html'">
                          <div class="imgcont position-relative">
                              <img src="./img/bedroom-hotel.jpg" alt="img" class="img-fluid">
                              <button class="pricebtn" fdprocessedid="5zt0bl">₹ 500</button>
                          </div>
                          <div class="px-3">
                              <h5 class="py-2">FOUR BED <br>
                                  LUXURY ROOM
                              </h5>
                              <p>2 King Beds | AC | Air Conditioner</p>
                              <p>Complimentary Breakfast</p>
                              <hr class="my-1">
                              <div>
                                  <div class="flex-all-prop py-2">
                                      <div class="flex-all-prop">
                                          <i class="ph ph-user px-2"></i>
                                          <p>5</p>
                                      </div>
                                      <div class="flex-all-prop">
                                          <i class="ph ph-bed px-2"></i>
                                          <p>2</p>
                                      </div>
                                      <div class="flex-all-prop">
                                          <i class="ph ph-ruler px-2"></i>
                                          <p>75 M<sup>2</sup></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12 column p-xl-  p-3 luxury show">
                        <div class="content text-center  h-100 position-relative" onclick="location.href='./room-page/lux-four.html'">
                            <div class="imgcont position-relative">
                                <img src="./img/bedroom-hotel.jpg" alt="img" class="img-fluid">
                                <button class="pricebtn" fdprocessedid="5zt0bl">₹ 500</button>
                            </div>
                            <div class="px-3">
                                <h5 class="py-2">FOUR BED <br>
                                    LUXURY ROOM
                                </h5>
                                <p>2 King Beds | AC | Air Conditioner</p>
                                <p>Complimentary Breakfast</p>
                                <hr class="my-1">
                                <div>
                                    <div class="flex-all-prop py-2">
                                        <div class="flex-all-prop">
                                            <i class="ph ph-user px-2"></i>
                                            <p>5</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-bed px-2"></i>
                                            <p>2</p>
                                        </div>
                                        <div class="flex-all-prop">
                                            <i class="ph ph-ruler px-2"></i>
                                            <p>75 M<sup>2</sup></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>


      {{-- footer section --}}
      <footer class="footer-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="single-footer-widget">
                <p class="footer-data">Content Registered is a free, online property content registration service that allows tenants, 
                  home owners, and businesses to upload pictures and manage their contents and assets.</p>
                </div>
              </div>
              
              <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                  <h3>Quick Links</h3>
                  
                  <ul class="import-link">
                    <li>
                      <a href="#">Information Security</a>
                    </li>
                    <li>
                      <a href="#">Terms and Conditions</a>
                    </li>
                    <li>
                      <a href="#">Privacy Policy</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                  <h3>Quick Links</h3>
                  
                  <ul class="import-link">
                    <li>
                      <a href="#">Information Security</a>
                    </li>
                    <li>
                      <a href="#">Terms and Conditions</a>
                    </li>
                    <li>
                      <a href="#">Privacy Policy</a>
                    </li>
                  </ul>
                </div>
              </div>
             {{-- <i class='bx bx-child'></i> --}}
              <div class="col-lg-3 col-md-6">
                 <div class="single-footer-widget">
                  <h3>Reach Us</h3>
                      <ul class="address">
                        <li>
                          <i class="flaticon-envelope"></i>
                          <a href="#"><span class="__cf_email__">info@contentregistered.com</span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> 
                <div class="copy-right-content">
                  <div class="row align-items-center">
                    <div class="col-lg-6">
                      <p>Copyright @2024 Content Registered. All Rights Reserved.</p>
                    </div>
                    
                    <div class="col-lg-6">
                      <ul class="footer-menu">
                        <li> <p>Designed and Developed by <a href="https://www.codeaegis.com/" target="_blank">CodeAegis UK</a>
                        </p></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div> 
            </footer>
            <script src="{{asset('/js/slick.min.js')}}"></script>
            <script type="text/javascript" src={{asset('js/custom.js')}}></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://unpkg.com/@phosphor-icons/web"></script>
          <script>
            $('.responsive').slick({
              dots: true,
              infinite: true,
              speed: 300,
              slidesToShow: 4,
              slidesToScroll: 1,
              responsive: [
                {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  
filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active1");
    current[0].className = current[0].className.replace("active1", "");
    this.className += " active";
  });
}
  </script>
  </body>
  </html>
  