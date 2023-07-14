@extends('admin/layout/layout')
@section('content')

<script>
    $(document).ready(function(){
      $(".addAdmin").hide();
  $(".addAdminButton").click(function(){
  $(".addAdmin").toggle();
  });
  });
  </script>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<section class="container">
    <div class="d-flex">
        <h4 class="me-auto mt-2">Admin Details</h4>
        <button class="addAdminButton btn btn-primary mt-2 mb-2">Add Admin</button>
    </div>
    <div class="addAdmin">
        <div class="card">
            <div class="card-header">{{ __('Register') }}</div>

            <div class="card-body">
                <form method="POST" action="/addAdmins" enctype="multipart/form-data">
                    @csrf

                    <section class="ms-5 row d-flex">
                    <div class="col-md mb-3">
                        <div class="col-md d-flex">
                        <label for="firstName" class="col-md-4 col-form-label text-md-end me-2">{{ __('First Name') }}</label>
                            <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>

                            @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col mb-3 me-5">

                        <div class="col-md d-flex">
                        <label for="lastName" class="col-md-4 col-form-label me-2 text-md-end">{{ __('Last Name') }}</label>

                        
                            <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                            @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </section>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                        <div class="col-md-6">
                            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-form-label text-md-end">{{ __('Profile Image') }}</label>

                        <div class="col-md-6">
                            <input id="profileImage" type="file" class="form-control" name="profileImage" required autocomplete="profileImage">
                        </div>
                    </div>

                    <div class="row ms-5 ps-5 mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div>
        <table class="table  table-hover mb-3">
            <thead>
            <tr class="table-dark">
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th >Phone</th>
                <th>Email</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adminData as $admin)
                <tr class="border border-2">
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->firstName}} {{$admin->lastName}}</td>
                    <td>{{$admin->address}}</td>
                    <td>{{$admin->phone}}</td>
                    <td>{{$admin->email}}</td>
                    <td><img class="rounded" src="{{asset($admin->profileImage)}}" alt="Profile Image" height="40px" width="40px"></td>   
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection