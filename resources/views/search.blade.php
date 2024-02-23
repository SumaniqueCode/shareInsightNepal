@extends('user/layout/layout')
@section('content')

<div class="container">
    <div class="summary border rounded mb-2 p-2 bg-secondary-subtle col-md-7 mt-2">  
        <table class="mb-5 me-auto">
            <thead>
                <th class="stockName bg-info p-1 rounded" name="stockName" colspan="6">{{$stockResult->symbol}}</th>
            </thead>
          <tbody>
            <tr>
              <td class="p-2">LTP:</td>
              <td class="p-2">{{$stockResult->ltp}}</td>
              <td class="p-2">Point Change:</td>
              <td class="p-2">{{$stockResult->pointChange}}</td>
              <td class="p-2">Percent Change:</td>
              <td class="p-2">{{$stockResult->percentChange}}</td>
            </tr>
            <tr>
              <td class="p-2">Open:</td>
              <td class="p-2">{{$stockResult->openPrice}}</td>
              <td class="p-2">High:</td>
              <td class="p-2">{{$stockResult->highPrice}}</td>
              <td class="p-2">Low:</td>
              <td class="p-2">{{$stockResult->lowPrice}}</td>
            </tr>
            <tr>
              <td class="p-2">Volume:</td>
              <td class="p-2">{{$stockResult->volume}}</td>
              <td class="p-2">Prev Close Price:</td>
              <td class="p-2">{{$stockResult->prevClosePrice}}</td>
            </tr>
          </tbody>
        </table>
      </div>
</div>


@endsection