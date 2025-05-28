@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-gray-100 px-6 py-4 text-lg font-semibold border-b">{{ __('Register') }}</div>

                <div class="px-6 py-4">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- First and Last Name -->
                        <div class="flex flex-col md:flex-row gap-4 mb-4">
                            <div class="w-full">
                                <label for="firstName" class="block text-gray-700 font-medium mb-1">{{ __('First Name') }}</label>
                                <input id="firstName" type="text" name="firstName"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 @error('firstName') border-red-500 @enderror"
                                    value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>
                                @error('firstName')
                                    <p class="text-red-500 text-sm mt-1"><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label for="lastName" class="block text-gray-700 font-medium mb-1">{{ __('Last Name') }}</label>
                                <input id="lastName" type="text" name="lastName"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 @error('lastName') border-red-500 @enderror"
                                    value="{{ old('lastName') }}" required autocomplete="lastName">
                                @error('lastName')
                                    <p class="text-red-500 text-sm mt-1"><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-1">{{ __('Email Address') }}</label>
                            <input id="email" type="email" name="email"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 @error('email') border-red-500 @enderror"
                                value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 font-medium mb-1">{{ __('Phone Number') }}</label>
                            <input id="phone" type="text" name="phone"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 @error('phone') border-red-500 @enderror"
                                value="{{ old('phone') }}" required autocomplete="phone">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                        <!-- Address -->
                        <div class="mb-4">
                            <label for="address" class="block text-gray-700 font-medium mb-1">{{ __('Address') }}</label>
                            <input id="address" type="text" name="address"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 @error('address') border-red-500 @enderror"
                                value="{{ old('address') }}" required autocomplete="address">
                            @error('address')
                                <p class="text-red-500 text-sm mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 font-medium mb-1">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 @error('password') border-red-500 @enderror"
                                required autocomplete="new-password">
                            @error('password')
                                <p class="text-red-500 text-sm mt-1"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label for="password-confirm" class="block text-gray-700 font-medium mb-1">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" name="password_confirmation"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400"
                                required autocomplete="new-password">
                        </div>

                        <!-- Profile Image -->
                        <div class="mb-4">
                            <label for="profileImage" class="block text-gray-700 font-medium mb-1">{{ __('Profile Image') }}</label>
                            <input id="profileImage" type="file" name="profileImage"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400"
                                required>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded shadow">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
