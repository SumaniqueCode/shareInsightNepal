@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-white border border-black rounded shadow">
        <div class="border-b border-black px-6 py-4 text-lg font-semibold">
            {{ __('Confirm Password') }}
        </div>

        <div class="p-6">
            <p class="mb-4 text-gray-700">
                {{ __('Please confirm your password before continuing.') }}
            </p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium mb-1">
                        {{ __('Password') }}
                    </label>
                    <input id="password" type="password" name="password"
                        class="w-full border border-black px-3 py-2 rounded @error('password') border-red-500 @enderror"
                        required autocomplete="current-password">
                    @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-gradient-to-b from-blue-900 via-blue-700 to-blue-500 text-white px-4 py-2 rounded border border-white hover:opacity-90">
                        {{ __('Confirm Password') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:underline ml-4" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
