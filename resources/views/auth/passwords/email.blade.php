@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-white border border-black rounded shadow">
        <div class="border-b border-black px-6 py-4 text-lg font-semibold">
            {{ __('Reset Password') }}
        </div>

        <div class="p-6">
            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-1">
                        {{ __('Email Address') }}
                    </label>
                    <input id="email" type="email" name="email"
                        class="w-full border border-black px-3 py-2 rounded @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-gradient-to-b from-blue-900 via-blue-700 to-blue-500 text-white px-4 py-2 rounded border border-white hover:opacity-90">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
