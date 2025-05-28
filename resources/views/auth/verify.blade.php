@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-gray-100 px-6 py-4 text-lg font-semibold border-b">
                    {{ __('Verify Your Email Address') }}
                </div>

                <div class="px-6 py-4 text-gray-800">
                    @if (session('resent'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p class="mb-2">
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                    </p>
                    <p class="mb-4">
                        {{ __('If you did not receive the email') }},
                    </p>

                    <form method="POST" action="{{ route('verification.resend') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-blue-600 hover:underline font-medium">
                            {{ __('click here to request another') }}
                        </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
