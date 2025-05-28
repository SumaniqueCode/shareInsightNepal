@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-gray-100 px-6 py-4 text-lg font-semibold border-b">{{ __('Login') }}</div>

                <div class="px-6 py-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4 flex flex-col md:flex-row items-start md:items-center">
                            <label for="email" class="md:w-1/3 mb-2 md:mb-0 text-gray-700 font-medium">{{ __('Email Address') }}</label>

                            <div class="md:w-2/3">
                                <input id="email" type="email" name="email"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 @error('email') border-red-500 @enderror"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-col md:flex-row items-start md:items-center">
                            <label for="password" class="md:w-1/3 mb-2 md:mb-0 text-gray-700 font-medium">{{ __('Password') }}</label>

                            <div class="md:w-2/3">
                                <input id="password" type="password" name="password"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 @error('password') border-red-500 @enderror"
                                    required autocomplete="current-password">

                                @error('password')
                                    <p class="text-red-500 text-sm mt-1">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 md:ml-1/3 md:pl-1/3">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="remember" id="remember"
                                    class="rounded text-blue-600 focus:ring-blue-500"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember Me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end md:justify-start md:pl-1/3">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded shadow">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="ml-4 text-sm text-blue-600 hover:underline" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
