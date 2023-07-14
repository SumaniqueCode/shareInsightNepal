<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <title>Share Insight Nepal</title>
    <link rel="icon" href="{{asset('images/shareInsight.JPG')}}" type="image/jpg" sizes="32x32">
</head>

<body class="container">
    <section class="topHeader row mb-2">
        <div class="logo d-flex">
            <img src="{{asset('images/shareInsight1.JPG')}}" class=" m-2 me-3" alt="Company Banner" width="150px">
            <img src="{{asset('images/shareInsight2.png')}}" class="me-auto mt-3" alt="Company Banner" width="300px" height="40px">
            <form class="d-flex searchField m-2" role="search">
                <input class="form-control me-2 mt-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success mt-2" type="submit">Search</button>
            </form>
        </div>
        <div class="navigation row">
            <nav class="navbar navbar-expand-md bg-success-subtle border rounded">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class=" navbar-nav me-auto mb-2 mb-md-0">
                            <li class="ms-3 nav-item">
                                <a class="nav-link active" aria-current="page" href="/adminHome">Home</a>
                            </li>
                            <li class="ms-3 nav-item">
                                <a class="nav-link active" aria-current="page" href="/brokers">Broker List</a>
                            </li>
                            <li class="ms-3 nav-item">
                                <a class="nav-link active" href="/customers">Customers</a>
                            </li>
                            <li class="ms-3 nav-item">
                                <a class="nav-link active" aria-current="page" href="/admins">Admins</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active me-3" aria-current="page" href="/login">Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <section class="container content row">
        <!-- content starts -->
        @yield('content')
        <!-- content ends -->
    </section>

    <section class="bottomFooter row">
        <div class="about pt-2 row rounded-top">
            <div class="aboutUs col-sm-7">
                <h5 class="col-sm-5">About Us</h5>
                <p class="col-sm-12">We are share Insight Nepal. We manage your portfolio. Go green, increase your revenue.</p>
            </div>
            <div class="socialMedia m-auto col-lg-5">
                    <a alt="facebook" class=" col-sm-2 mt-2 facebook-btn ms-2" href="https://www.facebook.com/limitlessplaying" target="_blank"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    <a alt="twitter" class="col-sm-2 mt-2 twitter-btn ms-2" href="https://twitter.com/regmisuman_2000" target="_blank"><i class="fa-brands fa-twitter fa-2xl"></i></a>
                   <a alt="youtube" class="col-sm-2 mt-2 youtube-btn ms-2" href="https://www.youtube.com/c/limitlessplaying2000" target="_blank"><i class="fa-brands fa-youtube fa-2xl"></i></a>
                   <a alt="instagram" class="col-sm-2 mt-2 instagram-btn ms-2" href="https://www.instagram.com/regmisuman_2000" target="_blank"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                    <a alt="linkedin" class="col-sm-2 mt-2 linkedin-btn ms-2" href="https://www.limitlessplaying.blogspot.com" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
            </div>

        </div>
        <div class="copyrightArea rounded-bottom d-flex pt-2 row">
            <div class="copyright col-sm-7">
            <p class="col-sm-12">Copyright &copy;2022-<script>document.write(new Date().getFullYear())</script> Share Insight Nepal All Rights Reserved</p>
            </div>
            <div class="col-lg-5">
                <a class="ps-2 pe-2 col-sm-2" href="/adminHome">Home</a>
                <a class="ps-2 pe-2 col-sm-4" href="/policy">Privacy Policy</a>
                <a class="ps-2 pe-2 col-sm-6" href="/terms">Terms and Condition</a>
            </div>
        </div>
    </section>
</body>

</html>