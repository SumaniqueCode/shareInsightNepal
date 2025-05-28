<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Share Insight Nepal</title>
    <link rel="icon" href="{{asset('images/shareInsight.JPG')}}" type="image/jpg" sizes="32x32">
    <style>
      .liveLiveMarket {
    background-image: url("{{asset('images/liveMarket1.png')}}");
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
  }
  .indexLiveMarket {
    background-image: url("{{asset('images/index1.png')}}");
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
  }
  .text-4xl{
    color: white;
  }
  .text-lg{
    color: white;
  }
  .topLiveMarket {
    background-image: url("{{asset('images/top1.png')}}");
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
  }
  .brokerLiveMarket {
    background-image: url("{{asset('images/broker1.png')}}");
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
  }
  .ipoLiveMarket {
    background-image: url("{{asset('images/ipo1.png')}}");
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
  }
  .ipoLiveMarket p{
    color: white
  }
  .watchlistLiveMarket {
    background-image: url("{{asset('images/watchlist1.png')}}");
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
  }
  .portfolioLiveMarket {
    background-image: url("{{asset('images/portfolio1.png')}}");
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
  }
  .main video{
  position: absolute;
  top: 13.5%;
  right: 7.6%;
  width: 85%;
  height: 37%;
  object-fit: cover;
}
    </style>
  <script>
    // Add your custom JavaScript or jQuery code here
    // Example animation using JavaScript
    document.addEventListener("DOMContentLoaded", function() {
      // const element = document.querySelector(".text-4xl");
      // const element1 = document.querySelector(".text-lg");
      const element2 = document.querySelector(".textBox");
      
      // element.classList.add("animate-bounce");
      element2.classList.add("animate-bounce");
      // element1.classList.add("animate-pulse");

    });
  </script>
</head>
<body class="container">
    <section class="topHeader row"> 
        <div class="logo col-xl-9 col-lg-7 col-md-7 col-sm-7 col-6 me-auto my-auto">
          <div class="d-flex gap-1">
            <a class="my-auto" href="{{ url('/') }}"><img class="img-fluid" src="{{asset('images/shareInsight1.JPG')}}"alt="Company Logo" width="150px"></a>
            <a class="my-auto" href="{{ url('/') }}"><img class="img-fluid" src="{{asset('images/shareInsight2.png')}}"alt="Company Banner" width="300px" height="40px"></a>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-3 col-3 my-3 mx-auto">
          <div class="row">
            <a class="col-xl-5 col-lg-3 col-md-5 col-sm-2 col-2 dashboard nav-link active pe-1 pt-1 my-auto me-auto" aria-current="page" href="/home"><button class="btn btn-primary">Dashboard</button></a>
            @guest
              <a class="col-xl-6 col-lg-4 col-md-6 col-sm-3 col-3 login nav-link active ps-1 pe-1 my-auto pt-1" aria-current="page" href="/loginRegister"><button class="btn btn-primary">Login/Register</button></a>
            @else
              <div class="col-xl-6 col-lg-4 col-md-6 col-sm-3 col-3">
                <div class="d-flex gap-1">
                <img src="{{ Auth::user()->profileImage }}" alt="Profile Image" class="w-12 img-fluid rounded-circle">
                <div class="nav-item dropdown mt-auto ">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle text-black" href="/profile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  </a>

                  <div class="dropdown-menu dropdown-menu-end p-1" aria-labelledby="navbarDropdown">
                    <a href="/profile" class="btn btn-primary w-full mb-1"> {{ Auth::user()->firstName }}  {{ Auth::user()->lastName }} </a>
                      <a class="btn btn-danger w-full" href="/logout"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="/logout" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
                </div>
                </div>
              </div>
            @endguest
          </div>
        </div>
    </section>
    <p class="border border-4"></p>

  <!-- video Section -->
  <section class="bg-white-100 col-12 py-20 main rounded">
    <div class="container mx-auto">
      <div class="text-center">
        <video autoplay muted loop id="video-bg" class="border border-5 border-secondary rounded">
          <source src="{{asset('images/bg.mp4')}}" type="video/mp4">
          Your browser does not support the video tag.
        </video>   
        <div class="textBox">
        <h1 class="text-4xl font-bold">Welcome to Share Insight Nepal</h1>
        <p class="mt-4 m-2 text-lg">Your Ultimate Destination for Nepal Stocks Market Data</p>
      </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-6 row">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Live Market -->
        <div class="liveLiveMarket bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Live Market</h2>
          <!-- Add your live market widget here -->
          <p>Get up-to-date information on stock prices, trading volume, and market trends.</p>
        </div>

        <!-- Live Market Index Section -->
        <div class="bg-white indexLiveMarket shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Live Market Index</h2>
          <!-- Add your live market index and sub-indices content here -->
          <p>Stay updated with the performance of various market indices and sub-indices, such as the stock exchange index, sector-specific indices, and more.</p>
        </div>

        <!-- Top Gainers/Losers -->
        <div class="topLiveMarket bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Top Gainers/Losers</h2>
          <!-- Add your top gainers/losers widget here -->
          <p>Stay informed about the stocks that are performing well and those that are experiencing losses.</p>
        </div>

        <!-- Watchlist Section -->
        <div class="watchlistLiveMarket bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Watchlist</h2>
          <!-- Add your watchlist functionality here -->
          <p>Create and maintain a personalized watchlist of stocks that you want to monitor closely.</p>
        </div>

        <!-- Portfolio Section -->
        <div class="portfolioLiveMarket bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Portfolio</h2>
          <!-- Add your portfolio functionality here -->
          <p>Track your investment holdings, view your portfolio performance, and make informed decisions about your investments.</p>
        </div>

        <!-- IPO Results -->
        <div class="ipoLiveMarket bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">IPO Results</h2>
          <p class="text-gray-600 mb-6">Stay updated with IPO results.</p>
          <!-- Add your IPO results here -->
          <p>Stay informed about the latest initial public offerings (IPOs) and their results.</p>
        </div>

        <!-- Broker Lists -->
        <div class="brokerLiveMarket bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Broker Lists</h2>
          <!-- Add your broker list here -->
          <p>Find information about authorized stockbrokers and their services, including contact details, address, and their TMS IDs.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bottomFooter row">
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
        <div class="copyright col-md-12 col-lg-7 col-sm-12">
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