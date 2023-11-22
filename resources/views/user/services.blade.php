@extends('user/layout/layout')
@section('content')


<h2 class="mt-1">Services</h2>
<section class="yourInfo mb-2 row">
    <h4>Your Info</h4>
    <div class="ipo m-2 col-md-2">
       {{-- <a href="/ipoResult" target="_blank"> <img src="{{asset('images/ipo.JPG')}}" alt="IPO RESULT" height="50px" class="border border-secondary border-3 rounded"></a> --}}
       <a href="https://iporesult.cdsc.com.np/" target="_blank"> <img src="{{asset('images/ipo.JPG')}}" alt="IPO RESULT" height="50px" class="border border-secondary border-3 rounded"></a>
       <h6>IPO RESULT</h6>
    </div>
    <div class="watchlist m-2 col-md-2">
       <a href="watchlist"> <img src="{{asset('images/watchlist.jpg')}}" alt="WATCHLIST" height="50px" class="border border-secondary border-3 rounded"></a>
       <h6>Watch List</h6>
    </div>
    <div class="portfolio m-2 col-md-2">
        <a href="/portfolio"><img src="{{asset('images/portfolio.jpg')}}" alt="PORTFOLIO" height="50px" class="border border-secondary border-3 rounded"></a>
        <h6>Portfolio</h6>
    </div>
</section>
<section class="nepse mb-2 row">
    <h4>Market Info</h4>
    <div class="liveMarket m-2 col-md-2">
       <a href="/liveMarket"> <img src="{{asset('images/liveMarket.jpeg')}}" alt="LIVE MARKET" height="50px" class="border border-secondary border-3 rounded"></a>
        <h6>Live Market</h6>
    </div>
    {{-- <div class="floorsheet m-2 col-md-2">
        <a><img src="{{asset('images/floorsheet.png')}}" alt="FLOOR SHEET" height="50px" class="border border-secondary border-3 rounded"></a>
        <h6>FLOORSHEET</h6>
    </div> --}}
    <div class="index m-2 col-md-2">
        <a href="/indices"><img src="{{asset('images/index.jpg')}}" alt="INDEX" height="50px" class="border border-secondary border-3 rounded"></a>
        <h6>Index</h6>
    </div>

    <div class="topStocks m-2 col-md-2">
        <a href="/topStocks"><img src="{{asset('images/floorsheet.png')}}" alt="TOP STOCKS" height="50px" class="border border-secondary border-3 rounded"></a>
        <h6>Top Stocks</h6>
    </div>
</section>
<section class="news mb-2 row">
    <h4>News and Info</h4>
    <div class="m-2 col-md-2">
       <a href="/broker"> <img src="{{asset('images/broker.JPG')}}" alt="Broker List" height="50px" class="border border-secondary border-3 rounded"></a>
        <h6>BROKER LIST</h6>
    </div>
</section>

@endsection