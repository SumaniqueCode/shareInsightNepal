@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4">
    <div class="bg-white border border-black rounded shadow">
        <div class="text-lg font-semibold bg-gray-100 px-6 py-4 border-b border-black">
            {{ __('Register') }}
        </div>

        <div class="p-6 border-t border-black">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div class="flex flex-col md:flex-row gap-6 mb-4">
                    <div class="w-full">
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">{{ __('First Name') }}</label>
                        <input id="firstName" type="text" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus
                            class="w-full border border-black px-3 py-2 rounded @error('firstName') border-red-500 @enderror">
                        @error('firstName')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Last Name') }}</label>
                        <input id="lastName" type="text" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName"
                            class="w-full border border-black px-3 py-2 rounded @error('lastName') border-red-500 @enderror">
                        @error('lastName')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Email Address') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                        class="w-full border border-black px-3 py-2 rounded @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Phone Number') }}</label>
                    <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                        class="w-full border border-black px-3 py-2 rounded @error('phone') border-red-500 @enderror">
                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Address') }}</label>
                    <input id="address" type="text" name="address" value="{{ old('address') }}" required autocomplete="address"
                        class="w-full border border-black px-3 py-2 rounded @error('address') border-red-500 @enderror">
                    @error('address')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="w-full border border-black px-3 py-2 rounded @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password-confirm" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
                        class="w-full border border-black px-3 py-2 rounded">
                </div>

                <div class="mb-4">
                    <label for="profileImage" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Profile Image') }}</label>
                    <input id="profileImage" type="file" name="profileImage" required
                        class="w-full border border-black px-3 py-2 rounded">
                </div>

                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="bg-gradient-to-b from-blue-900 via-blue-700 to-blue-500 text-white font-semibold px-8 py-2 rounded border border-white">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
