@if ($user->isRole = 'user')
@extends('user/layout/layout')   

@else
@extends('user/layout/layout')

@endif

@section('content')
<section class="container profile">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    {{-- <div class="card-body">
                        <img src="{{ $user->profileImage }}" alt="Profile Image" class="img-fluid rounded-circle">
                        <h4 class="mt-3">{{ $user->firstName }} {{ $user->lastName }}</h4>
                        <p class="text-muted">{{ $user->email }}</p>
                        <p class="text-muted">{{ $user->phone }}</p>
                        <p class="text-muted">{{ $user->address }}</p>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-9">
            </div>
        </div>
    </div>
</section>
@endsection