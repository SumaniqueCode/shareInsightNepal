<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- custom styles -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Bootstrap JS (including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Slick Slider JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <title>Share Insight Nepal</title>
    <link rel="icon" href="{{asset('images/shareInsight.JPG')}}" type="image/jpg" sizes="32x32">
</head>

<body class="container row mx-auto">
    <section class="topHeader col-span-12">
        <div class="topHeadera">
            <div class="logo d-flex me-auto row">
                <div class="col-lg-7 col-md-12 col-sm-12 d-flex me-auto">
                    <a class="col-lg-3 col-md-4 col-sm-4 mt-auto mb-auto" href="{{ url('/home') }}"><img class="img-fluid" src="{{asset('images/shareInsight1.JPG')}}"alt="Company Logo" width="150px"></a>
                    <a class="col-lg-6 col-md-8 col-sm-8 me-auto mt-auto mb-auto" href="{{ url('/home') }}"><img class="img-fluid" src="{{asset('images/shareInsight2.png')}}"alt="Company Banner" width="300px" height="40px"></a>
                 </div>
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex me-auto"> 
                    <form class="d-flex searchField m-2" role="search" action="/search" method="post">
                     @csrf
                        <input class="form-control col-lg-5 col-md-5 col-sm-4 p-3 mt-3 me-2 border border-1 border-primary" name="symbol" type="search" placeholder="Search" aria-label="Search">
                         <button class="col-lg-4 col-md-4 col-sm-4 btn btn-outline-success pb-3 mt-3" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="navigation">
            <nav class="navbar navbar-expand-lg border rounded">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="navbar-nav me-auto mb-2 mb-lg-0">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active text-center text-white" aria-current="page" href="/home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-center text-white" href="/services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-center text-white" aria-current="page" href="/liveMarket">Live Market</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-center text-white" aria-current="page" href="/watchlist">Watchlist</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-center text-white" aria-current="page" href="/portfolio">Portfolio</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="navbar-nav me-auto mb-2 mb-lg-0">
                                <div class="nav-item">
                                    <a class="nav-link active text-center text-white me-3" aria-current="page" href="/profile">Profile</a>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </nav>
        </div>
    </section>

    <section class="container content col-span-12">
        <!-- content starts -->
        @yield('content')
        <!-- content ends -->

        <button type="button" class="btn btn-primary btn-floating btn-lg" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
        
    <script>
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
        scrollFunction();
        };

        function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
    </section>

    <section class="bottomFooter col-span-12">
        <div class="about pt-2 row rounded-top">
            <div class="aboutUs col-md-12 col-lg-8 col-sm-12">
                <h5>About Us</h5>
                <p>We are share Insight Nepal. We manage your portfolio. Go green, increase your revenue. 
                    For More info Contact: 9800000000 or Mail us: support@shareinsightnepal.com</p>
            </div>
            <div class="socialMedia m-auto col-md-12 col-lg-4 col-sm-12 pb-1">
                    <a alt="facebook" class="facebook-btn ms-2" href="https://www.facebook.com/limitlessplaying" target="_blank"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    <a alt="twitter" class="twitter-btn ms-2" href="https://twitter.com/regmisuman_2000" target="_blank"><i class="fa-brands fa-twitter fa-2xl"></i></a>
                   <a alt="youtube" class="youtube-btn ms-2" href="https://www.youtube.com/c/limitlessplaying2000" target="_blank"><i class="fa-brands fa-youtube fa-2xl"></i></a>
                   <a alt="instagram" class="instagram-btn ms-2" href="https://www.instagram.com/regmisuman_2000" target="_blank"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                    <a alt="linkedin" class="linkedin-btn ms-2" href="https://www.limitlessplaying.blogspot.com" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
            </div>

        </div>
        <div class="copyrightArea navbar rounded-bottom d-flex gap-6 pt-2 row">
            <div class="copyright col-md-12 col-lg-8 col-sm-12">
            <p>Copyright &copy;2022-<script>document.write(new Date().getFullYear())</script> Share Insight Nepal All Rights Reserved</p>
            </div>
            <div class="col-md-12 col-lg-4 d-flex col-sm-12 gap-4">
                <a class="ps-2 pe-2" href="/home">Home</a>
                <a class="ps-2 pe-2" href="/policy">Privacy Policy</a>
                <a class="ps-2 pe-2" href="/terms">Terms and Condition</a>
            </div>
        </div>
    </section>
</body>

</html>