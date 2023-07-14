@extends('user/layout/layout')
@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@error('symbol')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<?php
use App\Models\User\LiveMarket;
$livemarkets= LiveMarket::orderBy('symbol', 'asc')->get();
$i=1;
?>

<section class="liveMarket mt-1 row">
  <div class="col-sm-12">
    <h2>Live Market</h2>
    <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">ID</th>
      <th scope="col">Symbol</th>
      <th scope="col">LTP</th>
      <th scope="col">Point Change</th>
      <th scope="col">%Change</th>
      <th scope="col">Open</th>
      <th scope="col">High</th>
      <th scope="col">Low</th>
      <th scope="col">Volume</th>
      <th scope="col">Prev.Close</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          @foreach ($livemarkets as $liveMarketData)
          <tr class="{{$liveMarketData->pointChange>0 ? 'table-success': ($liveMarketData->pointChange < 0 ? 'table-danger' : 'table-secondary')}} border border-2 border-light">
          <td>{{$i}}</td>
          <td>{{$liveMarketData->symbol}}</td>
          <td>{{$liveMarketData->ltp}}</td>
          <td>{{$liveMarketData->pointChange}}</td>
          <td>{{$liveMarketData->percentChange}}</td>
          <td>{{$liveMarketData->openPrice}}</td>
          <td>{{$liveMarketData->highPrice}}</td>
          <td>{{$liveMarketData->lowPrice}}</td>
          <td>{{$liveMarketData->volume}}</td>
          <td>{{$liveMarketData->prevClosePrice}}</td>
      <td><a class="bg-primary rounded p-1 ps-2 pe-2" href="/addToWatchlist/{{$liveMarketData->symbol}}">Add to watchlist</a></td>
    </td>
    </tr>
    <?php 
    ++$i;?>
@endforeach
    </tr>
  </tbody>
</table>
</div>
</section>
@endsection