@extends('admin/layout/layout')
@section('content')

<script>
    $(document).ready(function(){
      $(".addBroker").hide();
  $(".addBrokerButton").click(function(){
  $(".addBroker").toggle();
  });
  });
  </script>

@if(session('success'))
    <div class=" mt-1 alert alert-success">{{ session('success') }}</div>
@endif

@error('symbol')
    <div class=" mt-1 alert alert-danger">{{ $message }}</div>
@enderror

<section class="container">
    <div class="d-flex">
        <h4 class="me-auto mt-2">Broker Details</h4>
        <button class="addBrokerButton btn btn-primary mt-2 mb-2">Add Brokers</button>
    </div>
<div class="addBroker ms-5 mb-3">
<form class="form" action="/addBrokers" method="post">
    @csrf
    <label class="form-label m-1" for="brokerId">Broker Id</label>
    <input type="text" class="form-control w-50 mb-2" name="brokerId">
    <label class="form-label m-1" for="brokerName">Broker Name</label>
    <input type="text" class="form-control w-50 mb-2" name="brokerName">
    <label class="form-label m-1" for="brokerPhone">Broker Phone</label>
    <input type="text" class="form-control w-50 mb-2" name="brokerPhone">
    <label class="form-label m-1" for="brokerAddress">Broker Address</label>
    <input type="text" class="form-control w-50 mb-2" name="brokerAddress">
    <label class="form-label m-1" for="brokerTms">Broker TMS Link</label>
    <input type="text" class="form-control w-50 mb-2" name="brokerTms">
    <button type="submit" class="btn btn-primary">SUBMIT</button>
</form>
</div>

<div>
    <table class="table  table-hover mb-3">
        <thead>
        <tr class="table-dark">
            <th class="ps-3">Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>TMS ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($brokers as $broker)
            <tr class="border border-2">
                <td>{{$broker->brokerId}}</td>
                <td>{{$broker->brokerName}}</td>
                <td>{{$broker->brokerPhone}}</td>
                <td>{{$broker->brokerAddress}}</td>
                <td class="bg-info rounded"><a class="" href="{{$broker->brokerTms}}" target="_blank">Go to TMS </a></td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
</section>
@endsection