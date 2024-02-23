@extends('user/layout/layout')
@section('content')

<script>
  $(document).ready(function () {
    $(".addStockPortfolio").hide();
    $(".addPortfolio").click(function () {
      $(".addStockPortfolio").toggle();
    });
  });
</script>

@if(session('success'))
<div class="alert alert-success mt-1"><span>{{ session('success') }}</span></div>
@endif

@error('symbol')
<div class="alert alert-danger mt-1"><span>{{ $message }}</span></div>
@enderror


<?php 
use App\Models\User\LiveMarket;
use App\Models\User\Portfolio;
use Illuminate\Support\Facades\Auth;


$liveMarket = LiveMarket::orderBy('symbol', 'asc')->get();
$portfolio = Portfolio::where('userId', Auth::user()->id)->get();
$totalStock= $portfolio->count();
$totalUnit=Portfolio::sum('stockUnit');
$totalInvestment=Portfolio::sum('buyingPrice');
$totalCurrentValue = 0; // Initialize total current value

if ($totalStock>0) {
foreach ($portfolio as $Portfolio) {
    $liveMarkets = LiveMarket::where('symbol', $Portfolio->stockName)->first();
    if ($liveMarkets) {
        $totalStockCurrentPrice = $liveMarkets->ltp * $Portfolio->stockUnit;
        $totalCurrentValue += $totalStockCurrentPrice; // Add current value to total current value
    }
}

$totalCurrentPrice = $totalCurrentValue ;
$totalPL = $totalCurrentPrice-$totalInvestment;
$totalPLpercent = number_format(($totalPL/$totalInvestment)*100 , 2, '.', ' ' );
if ($totalPL>0) {
  $totalPLtext = "Profit";
}
elseif ($totalPL<0) {
  $totalPLtext = "Loss";
}
else {
  $totalPLtext = "Profit/Loss";
}
}
?>

<section class="portfolio mt-1">
  <div class="d-flex">
    <h2 class=" me-auto">Portfolio</h2><button class="addPortfolio rounded btn btn-primary mb-2">Add stock to
      portfolio</button>
  </div>
  <div class="addStockPortfolio">
    <form method="post" action="/addToPortfolio">
      @csrf
      <div class="mb-3 ">
        <h5>Fill your stock details</h5>
        <label for="stockName" class="form-label">Select stock</label>
        <select name="stockName" id="" class="form-select w-50">
          @foreach ($liveMarket as $liveMarketData )
          <option value="{{$liveMarketData->symbol}}">{{$liveMarketData->symbol}}</option>
          @endforeach
        </select>
        <label for="buyingPrice" class="form-label">Buying Price</label>
        <input type="text" class="opacity-75 form-control w-50" id="buyingPrice"
          placeholder="Input price including sebon, broker commission and DP fee" name="buyingPrice">
        <label for="stockUnit" class="form-label">Units</label>
        <input type="number" class="form-control w-50" id="stockUnit" name="stockUnit">
      </div>
      <button type="submit" class=" mb-4 btn btn-primary">Submit</button>
    </form>
  </div>

  @if ($totalStock>0)
  {{-- displaying stocks --}}
  <div class="summary border rounded mb-2 p-2 bg-secondary-subtle">
    <h5 class="bg-primary text-white rounded p-1">Summary</h5>
    <div class="">
      <table class="mb-2 me-auto">
        <tbody>
          <tr>
            <td class="p-2">Total number of stocks:</td>
            <td class="p-2">{{$totalStock}}</td>
            <td class="p-2">Total Units:</td>
            <td class="p-2">{{$totalUnit}}</td>
          </tr>
          <tr>
            <td class="p-2">Total Investment:</td>
            <td class="p-2">{{$totalInvestment}}</td>
            <td class="p-2">Total Current Price:</td>
            <td class="p-2">{{$totalCurrentPrice}}</td>
          </tr>
          <tr>
            <td class="p-2">{{$totalPLtext}}:</td>
            <td class="p-2">{{$totalPL}}</td>
            <td class="p-2">{{$totalPLtext}} Percent:</td>
            <td class="p-2">{{$totalPLpercent}}%</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="stockDetails border rounded mb-2 p-2 bg-secondary-subtle">
    <h5 class="bg-primary text-white rounded p-1">Stock Details</h5>
    <div class="row">

      {{-- looping table --}}
      @foreach ($portfolio as $portfolioData)

      <?php
        $liveMarket = LiveMarket::where('symbol', $portfolioData->stockName)->first();
        $totalStockCurrentPrice = $liveMarket->ltp * $portfolioData->stockUnit;
        $profitLoss = $totalStockCurrentPrice - $portfolioData->buyingPrice;
        $profitLossPercent = number_format(($profitLoss/$portfolioData->buyingPrice)*100 , 2, '.', ' ' );
        if ($profitLoss>0) {
           $PLtext = "Profit";
        }
        elseif ($profitLoss<0) {
           $PLtext = "Loss";
        }
      ?>

      <span class=" m-2 col-lg-5 col-12">
        <table>
          <thead>
            <th class="stockName text-white p-1 rounded {{$profitLoss>0 ? 'bg-success': ($profitLoss < 0 ? 'bg-danger' : 'bg-secondary')}}" name="stockName" colspan="4">
              {{$portfolioData->stockName}}
            </th>
            <th>
              <a class="ms-2" href="/deletePortfolioStock/{{$portfolioData->id}}">
                <img src="{{asset('images/delete.png')}}" alt="DELETE STOCK" height="25px">
              </a>
            </th>
          </thead>
          <tbody>
            <tr>
              <td class="p-2">Units:</td>
              <td class="p-2">{{$portfolioData->stockUnit}}</td>
              <td class="p-2">Total Investment:</td>
              <td class="p-2">{{$portfolioData->buyingPrice}}</td>
            </tr>
            @if ($liveMarket)

            <tr>
              <td class="p-2">Current Price Per Unit:</td>
              <td class="p-2">{{$liveMarket->ltp}}</td>
              <td class="p-2">Total Current Price:</td>
              <td class="p-2">{{$totalStockCurrentPrice}}</td>
            </tr>
            <tr>
              <td class="p-2">{{$PLtext}}:</td>
              <td class="p-2">{{$profitLoss}} </td>
              <td class="p-2">{{$PLtext}} Percent:</td>
              <td class="p-2">{{$profitLossPercent}}%</td>
            </tr>

            @else
            <tr>
              <td class="p-2">Current Price Per Unit:</td>
              <td class="p-2">N/A</td>
              <td class="p-2">Total Current Price:</td>
              <td class="p-2">N/A</td>
            </tr>
            <tr>
              <td class="p-2">Profit/Loss:</td>
              <td class="p-2">N/A </td>
              <td class="p-2">Profit/Loss Percent:</td>
              <td class="p-2">N/A</td>
            </tr>
            @endif

          </tbody>
        </table>
      </span>
      @endforeach

    </div>
  </div>
  @endif
</section>

@endsection