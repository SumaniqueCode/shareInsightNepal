@extends('admin/layout/layout')
@section('content')

<section>
<h4>Users Data</h4>
<div>
    <table class="table  table-hover mb-3">
        <thead>
        <tr class="table-dark">
            <th>Id</th>
            <th class=>Name</th>
            <th class=>Address</th>
            <th >Phone</th>
            <th>Email</th>
            <th>Photo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class="border border-2">
                <td>{{$user->id}}</td>
                <td>{{$user->firstName}} {{$user->lastName}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td><img class="rounded" src="{{asset($user->profileImage)}}" alt="Profile Image" height="40px" width="40px"></td>   
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
</section>
@endsection