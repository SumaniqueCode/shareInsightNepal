@extends('user/layout/layout')
@section('content')

<script>
  $(document).ready(function() {
    $('.indices').slick({
      slidesToShow: 3, // Adjust the number of slides shown
      slidesToScroll: 1,
      autoplay: true, // Set to true for autoplay
      autoplaySpeed: 2000, // Adjust the autoplay speed in milliseconds
    });
  });
</script>


<?php 
use App\Models\User\Index;
use App\Models\User\LiveMarket;

indexData();
$indices = Index::latest()->get();
$nepseIndex = Index::where('indexName', 'Nepse Index')->first();
$topgainers = LiveMarket::orderBy('percentChange', 'desc')->take(10)->get();
$toploosers = LiveMarket::where('percentChange', '<', 0)->orderBy('percentChange', 'desc')->take(10)->get();
?>

<section class="nepseIndex row mb-3 mt-1">
  <div class="row d-flex">
    <h5 class="col-lg-2">Nepse Index: </h5>
    <h5 class="col-lg-2">{{$nepseIndex->indexPrice}}</h5>
    <h6 class="col-lg-1 pt-1 {{ $nepseIndex && $nepseIndex->indexPercent > 0 ? 'text-success' : ($nepseIndex && $nepseIndex->indexPercent < 0 ? 'text-danger' : 'text-secondary') }}">{{$nepseIndex->indexValue}}</h6>
    <h6 class="col-lg-1 pt-1 {{ $nepseIndex && $nepseIndex->indexPercent > 0 ? 'text-success' : ($nepseIndex && $nepseIndex->indexPercent < 0 ? 'text-danger' : 'text-secondary') }}">{{$nepseIndex->indexPercent}}</h6>
  </div>
</section>
<section class="nepseIndex row mb-3">
    <h5 class="col-md">Index</h5>
    <div class="d-flex col-md indices">
      @foreach ($indices as $index)
      <div class="col-md-4 ms-2 mt-2">
        <div class="card rounded text-light {{ $index && $index->indexPercent > 0 ? 'bg-success' : ($index && $index->indexPercent < 0 ? 'bg-danger' : 'bg-secondary') }}">
          <div class="card-body p-1">
            <h5 class="card-title">{{$index->indexName}}</h5>
            <h5 class="card-text">{{$index->indexPrice}}</h5>
            <div class="d-flex">
              <h6 class="">{{$index->indexValue}}</h6>
              <h6 class="ms-auto">{{$index->indexPercent}}</h6>
            </div>
          </div>
        </div>
      </div>      
      @endforeach
    </div>
</section>
<section class="top row mb-3">
    <div class="topGainer col-md-6">
        <h5>Top Gainer</h5>
        <table class="table table-dark">
          <thead>
          <tr>
              <th scope="col">Symbol</th>
              <th scope="col">LTP</th>
              <th scope="col">Point Change</th>
              <th scope="col">%Change</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($topgainers as $topgainer)
              <tr class="border border-2 border-light table-success">
                  <td><a class="liveSymbolName" href="/search/{{$topgainer->symbol}}">{{ $topgainer->symbol}}</a></td>
                      <td>{{ $topgainer->ltp }}</td>
                      <td>{{ $topgainer->pointChange }}</td>
                      <td>{{ $topgainer->percentChange }}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
    </div>
    <div class="topLooser col-md-6">
        <h5>Top Looser</h5>
        <table class="table table-dark">
          <thead>
          <tr>
              <th scope="col">Symbol</th>
              <th scope="col">LTP</th>
              <th scope="col">Point Change</th>
              <th scope="col">%Change</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($toploosers as $toplooser)
              <tr class="border border-2 border-light table-danger">
                  <td><a class="liveSymbolName" href="/search/{{$toplooser->symbol}}">{{ $toplooser->symbol}}</a></td>
                      <td>{{ $toplooser->ltp }}</td>
                      <td>{{ $toplooser->pointChange }}</td>
                      <td>{{ $toplooser->percentChange }}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
    </div>
</section>

@endsection