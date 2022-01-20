@extends('layout')
@section('content')
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 border p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Register!</h1>
        <form action="/register" method="post" class="mt-10">
            @csrf
            <div class="mb-6">
                <label for="name" class="block nb-2 uppercase font-bold text-xs text-gray-700">
                    Full Name
                </label>
                <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full"
                    value="{{ old('name') }}" required>
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="username" class="block nb-2 uppercase font-bold text-xs text-gray-700">
                    Username
                </label>
                <input type="text" value="{{ old('username') }}" name="username" id="username"
                    class="border border-gray-400 p-2 w-full" required>
                @error('username')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block nb-2 uppercase font-bold text-xs text-gray-700">
                    Email
                </label>
                <input type="email" value="{{ old('email') }}" name="email" id="email"
                    class="border border-gray-400 p-2 w-full" required>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block nb-2 uppercase font-bold text-xs text-gray-700">
                    Password
                </label>
                <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" required>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
            </div>
        </form>
    </main>

</section>
@endsection
