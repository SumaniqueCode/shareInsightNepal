<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Share Insight Nepal</title>
    <link rel="icon" href="{{asset('images/shareInsight.JPG')}}" type="image/jpg" sizes="32x32">
  <script>
    // Add your custom JavaScript or jQuery code here
    // Example animation using JavaScript
    document.addEventListener("DOMContentLoaded", function() {
      const element = document.querySelector(".text-4xl");
      element.classList.add("animate-pulse");
    });
  </script>
</head>
<body class="container">

<section class="companyDetails">
    <section class="topHeader row">  
        <div class="logo d-flex me-auto">
        <a href="{{ url('/') }}"><img src="{{asset('images/shareInsight1.JPG')}}" class=" m-2 me-3" alt="Company Logo" width="150px"></a><a class="me-auto mt-3" href="{{ url('/') }}"><img src="{{asset('images/shareInsight2.png')}}" class="me-auto mt-3" alt="Company Banner" width="300px" height="40px"></a>
        <a class="login nav-link active me-3 ps-1 pe-1 pt-1 mt-3" aria-current="page" href="/loginRegister"><button class="btn btn-success">Login/Register</button></a>
    </div>
        <p class="border border-4"></p>

    </section>
  <!-- Hero Section -->
  <section class="bg-gray-100 py-20">
    <div class="container mx-auto">
      <div class="text-center">
        <h1 class="text-4xl font-bold">Welcome to Share Insight Nepal</h1>
        <p class="mt-4 text-lg">Your Ultimate Destination for Nepal Stocks Market Data</p>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-16">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Live Market -->
        <div class="bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Live Market</h2>
          <!-- Add your live market widget here -->
          <p>Get up-to-date information on stock prices, trading volume, and market trends.</p>
        </div>

        <!-- Live Market Index Section -->
        <div class="bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Live Market Index</h2>
          <!-- Add your live market index and sub-indices content here -->
          <p>Stay updated with the performance of various market indices and sub-indices, such as the stock exchange index, sector-specific indices, and more.</p>
        </div>

        <!-- Top Gainers/Losers -->
        <div class="bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Top Gainers/Losers</h2>
          <!-- Add your top gainers/losers widget here -->
          <p>Stay informed about the stocks that are performing well and those that are experiencing losses.</p>
        </div>

        <!-- Watchlist Section -->
        <div class="bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Watchlist</h2>
          <!-- Add your watchlist functionality here -->
          <p>Create and maintain a personalized watchlist of stocks that you want to monitor closely.</p>
        </div>

        <!-- Portfolio Section -->
        <div class="bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Portfolio</h2>
          <!-- Add your portfolio functionality here -->
          <p>Track your investment holdings, view your portfolio performance, and make informed decisions about your investments.</p>
        </div>

        <!-- IPO Results -->
        <div class="bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">IPO Results</h2>
          <p class="text-gray-600 mb-6">Stay updated with IPO results.</p>
          <!-- Add your IPO results here -->
          <p>Stay informed about the latest initial public offerings (IPOs) and their results.</p>
        </div>

        <!-- Broker Lists -->
        <div class="bg-white shadow p-6 rounded-lg">
          <h2 class="text-2xl font-bold mb-4">Broker Lists</h2>
          <!-- Add your broker list here -->
          <p>Find information about authorized stockbrokers and their services, including contact details, address, and their TMS IDs.</p>
        </div>
      </div>
    </div>
  </section>
    

    <section class="bottomFooter row">
        <div class="about pt-2 row rounded-top">
            <div class="aboutUs col-md">
                <h5>About Us</h5>
                <p>We are share Insight Nepal. We manage your portfolio. Go green, increase your revenue.</p>
            </div>
            <div class="socialMedia m-auto col-md">
                    <a alt="facebook" class="facebook-btn ms-2" href="https://www.facebook.com/limitlessplaying" target="_blank"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    <a alt="twitter" class="twitter-btn ms-2" href="https://twitter.com/regmisuman_2000" target="_blank"><i class="fa-brands fa-twitter fa-2xl"></i></a>
                   <a alt="youtube" class="youtube-btn ms-2" href="https://www.youtube.com/c/limitlessplaying2000" target="_blank"><i class="fa-brands fa-youtube fa-2xl"></i></a>
                   <a alt="instagram" class="instagram-btn ms-2" href="https://www.instagram.com/regmisuman_2000" target="_blank"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                    <a alt="linkedin" class="linkedin-btn ms-2" href="https://www.limitlessplaying.blogspot.com" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
            </div>

        </div>
        <div class="copyrightArea rounded-bottom d-flex gap-6 pt-2 row">
            <div class="copyright col-md">
            <p>Copyright &copy;2022-<script>document.write(new Date().getFullYear())</script> Share Insight Nepal All Rights Reserved</p>
            </div>
            <div class="col-md d-flex gap-4">
                <a class="ps-2 pe-2" href="/policy">Privacy Policy</a>
                <a class="ps-2 pe-2" href="/terms">Terms and Condition</a>
            </div>
        </div>
    </section>

</section>
</body>
</html>