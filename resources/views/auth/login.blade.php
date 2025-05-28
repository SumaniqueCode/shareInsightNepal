@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-white shadow rounded-lg">
                <div class="bg-gray-100 px-6 py-3 text-lg font-semibold border-b">
                    {{ __('Login') }}
                </div>

                <div class="p-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4 flex flex-wrap items-center">
                            <label for="email" class="w-full md:w-1/3 text-right pr-4 text-gray-700 font-medium">
                                {{ __('Email Address') }}
                            </label>

                            <div class="w-full md:w-2/3">
                                <input id="email" type="email" class="w-full px-4 py-2 border rounded @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="text-red-500 text-sm mt-1 block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap items-center">
                            <label for="password" class="w-full md:w-1/3 text-right pr-4 text-gray-700 font-medium">
                                {{ __('Password') }}
                            </label>

                            <div class="w-full md:w-2/3">
                                <input id="password" type="password" class="w-full px-4 py-2 border rounded @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="text-red-500 text-sm mt-1 block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap">
                            <div class="md:ml-auto md:w-2/3 md:pl-4">
                                <label class="inline-flex items-center">
                                    <input class="form-checkbox text-indigo-600" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="ml-2 text-gray-700">{{ __('Remember Me') }}</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center">
                            <div class="md:ml-auto md:w-2/3 md:pl-4">
                                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="ml-4 text-blue-600 hover:underline text-sm" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
