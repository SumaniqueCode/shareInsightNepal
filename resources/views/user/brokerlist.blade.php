@extends('user/layout/layout')
@section('content')

<section class="brokerList">
    <h5>Broker List</h5>
<div>
    <table class="table mb-3">
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