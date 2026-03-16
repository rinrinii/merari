@extends('layouts.app')

@section('title', 'Register')

@php
$minimal = true;
@endphp

@section('content')

<div class="flex min-h-[70vh] items-center justify-center px-6 py-12">

    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Create an account
        </h2>

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul class="text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Name -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 focus:border-green-500 focus:ring-green-500">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Email</label>

                <input type="email" name="email" value="{{ old('email') }}" required class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 focus:border-green-500 focus:ring-green-500">

            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Password</label>

                <input type="password" name="password" required class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 focus:border-green-500 focus:ring-green-500">
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Confirm Password</label>

                <input type="password" name="password_confirmation" required class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 focus:border-green-500 focus:ring-green-500">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-500 transition">
                Create Account
            </button>

        </form>

        <!-- Login link -->
        <p class="mt-6 text-sm text-center text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-green-600 font-semibold hover:text-green-500 hover:underline">
                Sign in here.
            </a>
        </p>

    </div>

</div>

@endsection