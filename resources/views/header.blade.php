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
  <section>
    <div class="container">
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
    </div>
  </section>

      <section class="about-area ptb-100">
        <div class="container">
          <div class="row py-5 ">
            <div class="about-img col-sm-5 box">
              <img src="/img/about-img.jpg" alt="Abouts-image" class="img-fluid">
            </div>
            <div class="col-sm-7 px-3 d-flex flex-column justify-content-center">
              <h3>What is Lorem Ipsum? </h3>
              <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, 
                content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, 
                sometimes by accident, sometimes on purpose (injected humour and the like).</P>
              </div>
            </div>
          </div>
        </section>
        <section class="gallery-area py-5">
          <div class="container">
            <div class="row py-3">
              <div class="col-sm-12 d-flex flex-column align-items-center">
                <h3>What is Lorem Ipsum? </h3>
                <P class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  
                </P>
              </div>  
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="bx-design">
                  <img src="https://contentregistered.com/home/img/1.png" alt="">
                  <h3>Content Registered</h3>
                  <p>Easily Up Household Content</p>
                  <p>Step By Step Instructions to Itemize Items</p>
                  <p>Provides 3 different angles</p>
                  <p>Upload Sales Receipts/ Warranties</p>
                  <p>Pictures of security markings</p>
                  <p>Separated into Categories</p>
                  <p>Provides Status ( Damaged, Stolen, Sold Trashed)</p>
                  <p>Upload pics of Damaged Items for Insurances</p>
                  <p>Provide secure Dashboard Gateway for Insurance Viewing</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="bx-design">
                  <img src="https://contentregistered.com/home/img/2.png" alt="">
                  <h3>Insurance Gateway</h3>
                  <p>Provides secure dashboard for claims department</p>
                  <p>Provides proof of household content Items
                    Receipts, Warranties, Damaged Area,</p>
                    <p>Seamless communication with claims department</p>
                    <p>Provides proof of security &amp; security and safety assessments</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="bx-design">
                    <img src="https://contentregistered.com/home/img/4.png" alt="">
                    <h3>Health/Safety and Compliance <br>( Holiday/Short Term Letting ONLY)</h3>
                    <p>Provides and easy to use Maintenance Checklist</p>
                    <p>Safety Self Assessments</p>
                    <p>Upload Water Safety Documents </p>
                    <p>Upload Electrical Safety Documents </p>
                    <p>Conduct and proof of Fire safety Risk Self Assessments</p>
                    <p>Gas Safety Certificate upload</p>
                    <p>Tolerable Standards assessments</p>
                    <p>Changeover Checklists assessments</p>                
                  </div>
                </div>
                <div class="col-md-3">
                <div class="bx-design">
                    <img src="https://contentregistered.com/home/img/6.png" alt="">
                    <h3>Security Self Assessments and Monitoring</h3>
                    <p>Complete easy to use security self assessments</p>
                    <p>Store security monitoring company contracts and Contacts</p>
                    <p>Upload Police Reports for Stolen Items</p>
                    <p>Provides Security and Safety Advice</p>
                    <p>Secure storage of all Emergency Numbers</p>
                  </div>
                </div>
              </div>  
            </div>
          </section>

          {{-- <section class="about-area ptb-100">
            <div class="container">
        <div class="row py-5 h-100 ">
          <div class="about-img col-lg-6 col-sm-3 justify-content-between "> 
            <img src="/img/about-img.jpg" alt="Abouts-image" class="img-fluid">
          </div>
          <div class="about-img col-lg-6 col-sm-3 justify-content-beetween"> 
            <img src="/img/about-img.jpg" alt="Abouts-image" class="img-fluid">
          </div>
          <div class="row py-2"></div>
          <div class="col-lg-12 justify-content-center">
            <h3 class="text-center">What is Lorem Ipsum? </h3>
            <P class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
              When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
              It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
            </P>
          </div> 
        </div>
      </section> --}}

      
      
      <section class="about-area ptb-100 pt-5">
        <div class="container">
          <div class="text-center">
            <h3>What is Lorem Ipsum? </h3>
          </div>
          <div class="row py-5 responsive" >
            <div class="col-lg-3"> 
              <div class="card">
                <img src="img/t-shirt1.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
              </div>
            </div> 

            <div class="col-lg-3"> 
              <div class="card">
                <img src="img/t-shirt2.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
              </div>
            </div>

            <div class="col-lg-3"> 
              <div class="card">
                <img src="img/t-shirt3.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
              </div>
            </div>

            <div class="col-lg-3"> 
              <div class="card">
                <img src="img/t-shirt4.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
              </div>
            </div>

           <div class="col-lg-3"> 
              <div class="card">
                <img src="img/t-shirt5.jpg" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
              </div>
            </div>
          
          <div class="col-lg-3"> 
            <div class="card">
              <img src="img/t-shirt5.jpg" alt="Denim Jeans" style="width:100%">
              <h1>Tailored Jeans</h1>
              <p class="price">$19.99</p>
              <p>Some text about the jeans..</p>
              <p><button>Add to Cart</button></p>
            </div>
          </div>

        <div class="col-lg-3 "> 
          <div class="card">
            <img src="img/t-shirt3.jpg" alt="Denim Jeans" style="width:100%">
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
          </div>
        </div>  
        
        <div class="col-lg-3 "> 
          <div class="card">
            <img src="img/t-shirt1.jpg" alt="Denim Jeans" style="width:100%">
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
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
  </script>
  </body>
  </html>
  