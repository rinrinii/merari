@extends('layouts.app')

@section('title', 'Login')

@php
$minimal = true;
@endphp

@section('content')

<div class="flex min-h-[70vh] items-center justify-center px-6 py-10">

    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Login to your account
        </h2>

        @if ($errors->any())
            <div class="mb-4 p-3 rounded bg-red-100 text-red-700 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Email</label>

                <input type="email" name="email" value="{{ old('email') }}" required
                class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 focus:border-green-500 focus:ring-green-500">

            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Password</label>

                <input type="password" name="password" required
                class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 focus:border-green-500 focus:ring-green-500">
            </div>

            <button type="submit"
            class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-500 transition">
                Sign In
            </button>

        </form>

        <p class="mt-6 text-sm text-center text-gray-600">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-green-600 font-semibold hover:underline">
                Sign up here.
            </a>
        </p>

    </div>

</div>

@endsection