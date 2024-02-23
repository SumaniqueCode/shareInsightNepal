@extends('admin/layout/layout')   
@section('content')

<script>
    $(document).ready(function(){
      $(".editProfile").hide();
      $(".changePassword").hide();
  $(".editProfileBtn").click(function(){
  $(".editProfile").toggle();
  $(".changePasswordBtn").hide();
  $(".editProfileBtn").hide();
  $(".userProfile").hide();
  $(".logout").hide();
  });

  $(".changePasswordBtn").click(function(){
  $(".changePassword").toggle();
  $(".editProfileBtn").hide();
  $(".changePasswordBtn").hide();
  $(".userProfile").hide();
  $(".logout").hide();
  });  

  $(".cancelUpdate").click(function(){
  $(".editProfileBtn").show();
  $(".changePasswordBtn").show();
  $(".userProfile").show();
  $(".logout").show();
  $(".editProfile").hide();
  $(".changePassword").hide();
  });

  });
  </script>

<section class="container profile mb-3">
    <div class="container mt-5">
        <div class="row d-flex">
            <div class="col-md-5 userProfile">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ $user->profileImage }}" alt="Profile Image" class="w-25 img-fluid rounded-circle">
                        <h4 class="mt-3">Name: {{ $user->firstName }} {{ $user->lastName }}</h4>
                        <p class="text-muted">Email: {{ $user->email }}</p>
                        <p class="text-muted">Phone Number: {{ $user->phone }}</p>
                        <p class="text-muted">Address: {{ $user->address }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex flex-column align-items-start">
                <div><button class="editProfileBtn btn btn-primary mb-2 mt-2">Edit Details</button></div>
                <div><button class="changePasswordBtn btn btn-primary mb-2">Change Password</button></div>
                <div class="editProfile">
                    <div class="card">
                        <div class="card-header d-flex">
                            <div class="col-md me-auto">{{ __('Update Your Details') }}</div>
                            <div class="cancelUpdate"><button class="btn btn-danger">Cancel</button></div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/updateUserDetails" enctype="multipart/form-data">
                                @csrf
            

                                
                                <div class="row ms-5 mb-3">
                                    {{-- <label for="profileImage" class="col-md-4 col-form-label text-md-end">{{ __('Profile Image') }}</label> --}}
            
                                    <div class="ms-auto me-auto col-md-6 me-5">
                                        <a class="ms-5 changeProfile" href=""><img src="{{ $user->profileImage }}" alt="Profile Image" class="ms-5 w-25 img-fluid rounded-circle"></a>
                                        {{-- <input id="profileImage" type="file" class="form-control" name="profileImage" required autocomplete="profileImage"> --}}
                                    </div>
                                </div>


                                <section class="row d-flex">

                                <div class="ms-auto col-md-4 mb-3">
                                    <div class="col-md d-flex">
                                    <label for="firstName" class="col-md-4 col-form-label text-md-end me-2" pla>{{ __('First Name') }}</label>
                                        <input id="firstName" type="text" class="w-75 form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ $user->firstName }}" required autocomplete="firstName" autofocus>
            
                                        @error('firstName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
            
                                <div class="col-md-4 mb-3 me-auto">
            
                                    <div class="col-md d-flex">
                                    <label for="lastName" class="col-md-4 col-form-label me-2 text-md-end">{{ __('Last Name') }}</label>
                                    
                                        <input id="lastName" type="text" class="w-75 form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{$user->lastName}}" required autocomplete="lastName" autofocus>
            
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
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
            
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
                                        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$user->phone}}" required autocomplete="phone">
            
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
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$user->address}}" required autocomplete="address">
            
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
            
                                <div class="row ms-5 ps-5 mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="updateBtn btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-auto logout">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                 </div>
            </div>
        </div>

        <div class="changePassword col-md-6">
            <div class="card">
                <div class="card-header d-flex">
                <div class="me-auto">{{ __('Update Your Password') }}</div>
                <div class="cancelUpdate"><button class="btn btn-danger">Cancel</button></div>
            </div>
    
                <div class="card-body">
                    <form method="POST" action="/updatePassword">
                        @csrf
    

                        {{-- <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Previous Password') }}</label>
    
                            <div class="col-md-6">
                                <input id="previousPassword" type="password" class="previousPassword form-control" name="previousPassword" required autocomplete="new-password">
                            </div>
                        </div> --}}

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>
    
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
    
                        <div class="row ms-5 ps-5 mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection 