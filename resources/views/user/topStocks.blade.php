@extends('user/layout/layout')
@section('content')

<section class="top row mb-3">
    <div class="topGainer col-md-4">
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
                  <td>{{ $topgainer->symbol}}</td>
                      <td>{{ $topgainer->ltp }}</td>
                      <td>{{ $topgainer->pointChange }}</td>
                      <td>{{ $topgainer->percentChange }}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
    </div>
    <div class="topLooser col-md-4">
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
                  <td>{{ $toplooser->symbol}}</td>
                      <td>{{ $toplooser->ltp }}</td>
                      <td>{{ $toplooser->pointChange }}</td>
                      <td>{{ $toplooser->percentChange }}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
    </div>
    <div class="topTurnOver col-md-4">
        <h5>Top Turn Over</h5>
        <table class="table table-dark">
          <thead>
          <tr>
              <th scope="col">Symbol</th>
              <th scope="col">LTP</th>
              <th scope="col">Volume</th>
              <th scope="col">Turnover(Rs)</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($topturnovers as $topturnover)
              <tr class="border border-2 border-light table-primary">
                  <td>{{ $topturnover->symbol}}</td>
                      <td>{{ $topturnover->ltp }}</td>
                      <td>{{ $topturnover->volume }}</td>
                      <td>{{ $topturnover->turnover}}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
    </div>
</section>
@endsection