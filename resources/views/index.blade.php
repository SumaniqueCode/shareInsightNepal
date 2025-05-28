<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <title>Share Insight Nepal</title>
  <link rel="icon" href="{{asset('images/shareInsight.JPG')}}" type="image/jpg" sizes="32x32">
  <style>
    .liveLiveMarket, .indexLiveMarket, .topLiveMarket, .brokerLiveMarket, .ipoLiveMarket, .watchlistLiveMarket, .portfolioLiveMarket {
      background-size: cover;
      background-repeat: no-repeat;
      color: white;
    }
    .liveLiveMarket { background-image: url("{{asset('images/liveMarket1.png')}}"); }
    .indexLiveMarket { background-image: url("{{asset('images/index1.png')}}"); }
    .topLiveMarket { background-image: url("{{asset('images/top1.png')}}"); }
    .brokerLiveMarket { background-image: url("{{asset('images/broker1.png')}}"); }
    .ipoLiveMarket { background-image: url("{{asset('images/ipo1.png')}}"); }
    .watchlistLiveMarket { background-image: url("{{asset('images/watchlist1.png')}}"); }
    .portfolioLiveMarket { background-image: url("{{asset('images/portfolio1.png')}}"); }
    .text-4xl, .text-lg, .ipoLiveMarket p { color: white; }
    .main video {
      position: absolute;
      top: 13.5%;
      right: 7.6%;
      width: 85%;
      height: 37%;
      object-fit: cover;
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const element2 = document.querySelector(".textBox");
      element2.classList.add("animate-bounce");
    });
  </script>
</head>
<body class="container mx-auto">
  <section class="topHeader grid grid-cols-12 items-center gap-4 py-4">
    <div class="logo col-span-12 lg:col-span-9 flex gap-2">
      <a href="{{ url('/') }}"><img class="w-36" src="{{asset('images/shareInsight1.JPG')}}" alt="Company Logo" /></a>
      <a href="{{ url('/') }}"><img class="w-72 h-10" src="{{asset('images/shareInsight2.png')}}" alt="Company Banner" /></a>
    </div>
    <div class="col-span-12 lg:col-span-3 flex flex-col sm:flex-row gap-2 justify-center items-center">
      <a class="text-white" href="/home"><button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded">Dashboard</button></a>
      @guest
        <a class="text-white" href="/loginRegister"><button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded">Login/Register</button></a>
      @else
        <div class="flex items-center gap-2">
          <img src="{{ Auth::user()->profileImage }}" alt="Profile Image" class="w-10 h-10 rounded-full"/>
          <div class="relative">
            <a id="navbarDropdown" class="cursor-pointer text-black" href="/profile" role="button">
              ▼
            </a>
            <div class="absolute mt-1 bg-white rounded shadow w-40 p-2 hidden group-hover:block">
              <a href="/profile" class="block bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 mb-1 rounded text-center">{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</a>
              <a href="/logout" class="block bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-center"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="/logout" method="POST" class="hidden">@csrf</form>
            </div>
          </div>
        </div>
      @endguest
    </div>
  </section>

  <hr class="border-4"/>

  <section class="bg-white py-20 main rounded relative">
    <div class="text-center relative z-10">
      <video autoplay muted loop id="video-bg" class="border-4 border-gray-400 rounded mx-auto">
        <source src="{{asset('images/bg.mp4')}}" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <div class="textBox mt-6">
        <h1 class="text-4xl font-bold">Welcome to Share Insight Nepal</h1>
        <p class="mt-4 m-2 text-lg">Your Ultimate Destination for Nepal Stocks Market Data</p>
      </div>
    </div>
  </section>

  <section class="py-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="liveLiveMarket p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Live Market</h2>
        <p>Get up-to-date information on stock prices, trading volume, and market trends.</p>
      </div>
      <div class="indexLiveMarket p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Live Market Index</h2>
        <p>Stay updated with the performance of various market indices and sub-indices.</p>
      </div>
      <div class="topLiveMarket p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Top Gainers/Losers</h2>
        <p>Stay informed about the stocks that are performing well and those that are experiencing losses.</p>
      </div>
      <div class="watchlistLiveMarket p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Watchlist</h2>
        <p>Create and maintain a personalized watchlist of stocks you want to monitor closely.</p>
      </div>
      <div class="portfolioLiveMarket p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Portfolio</h2>
        <p>Track your investment holdings and view your portfolio performance.</p>
      </div>
      <div class="ipoLiveMarket p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">IPO Results</h2>
        <p class="text-gray-600 mb-6">Stay updated with IPO results.</p>
        <p>Stay informed about the latest initial public offerings and their results.</p>
      </div>
      <div class="brokerLiveMarket p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Broker Lists</h2>
        <p>Find info about authorized stockbrokers and their services.</p>
      </div>
    </div>
  </section>

  <section class="bottomFooter">
    <div class="about grid grid-cols-1 lg:grid-cols-12 gap-4 bg-gray-100 rounded-t p-4">
      <div class="aboutUs col-span-12 lg:col-span-8">
        <h5 class="font-bold text-lg mb-2">About Us</h5>
        <p>We are share Insight Nepal. We manage your portfolio. Go green, increase your revenue. For more info contact: 9800000000 or mail: support@shareinsightnepal.com</p>
      </div>
      <div class="socialMedia flex justify-center items-center gap-4 col-span-12 lg:col-span-4">
        <a href="https://www.facebook.com/limitlessplaying" target="_blank"><i class="fa-brands fa-facebook fa-2xl"></i></a>
        <a href="https://twitter.com/regmisuman_2000" target="_blank"><i class="fa-brands fa-twitter fa-2xl"></i></a>
        <a href="https://www.youtube.com/c/limitlessplaying2000" target="_blank"><i class="fa-brands fa-youtube fa-2xl"></i></a>
        <a href="https://www.instagram.com/regmisuman_2000" target="_blank"><i class="fa-brands fa-instagram fa-2xl"></i></a>
        <a href="https://www.limitlessplaying.blogspot.com" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
      </div>
    </div>
    <div class="copyrightArea flex flex-col lg:flex-row justify-between items-center bg-gray-200 p-4 rounded-b">
      <div class="text-center lg:text-left">
        <p>Copyright &copy;2022-
          <script>document.write(new Date().getFullYear())</script>
          Share Insight Nepal All Rights Reserved</p>
      </div>
      <div class="flex gap-4">
        <a href="/home">Home</a>
        <a href="/policy">Privacy Policy</a>
        <a href="/terms">Terms and Condition</a>
      </div>
    </div>
  </section>
</body>
</html>
