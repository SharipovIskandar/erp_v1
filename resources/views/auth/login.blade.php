@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
        <h2 class="text-2xl font-semibold mb-4 text-center">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md">Login</button>
        </form>
    </div>
@endsection
