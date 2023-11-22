@extends('user/layout/layout')
@section('content')

<?php 
use App\Models\User\Index;

$indices = Index::latest()->get();
$nepseIndex = Index::where('indexName', 'Nepse Index')->first();
?>

<section class="nepseIndex">
    <h5>Index</h5>
    <div class="indices">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Index Name</th>
                <th scope="col">Index Price</th>
                <th scope="col">Index Value</th>
                <th scope="col">% Change</th>
            </tr>
            </thead>
            <tbody>
      @foreach ($indices as $index)
        <tr class="col-md ms-2 mt-2 ps-1 pe-1 border border-2 border-light rounded text-light {{ $index && $index->indexPercent > 0 ? 'table-success' : ($index && $index->indexPercent < 0 ? 'table-danger' : 'bg-secondary') }}">
          <td class="col-md">{{$index->indexName}}</td>
          <td class="col-md">{{$index->indexPrice}}</td>
          <td class="col-md">{{$index->indexValue}}</td>
          <td class="col-md ms-2">{{$index->indexPercent}}</td>
        </tr>
      @endforeach
      </tbody>
        </table>
    </div>
</section>
@endsection