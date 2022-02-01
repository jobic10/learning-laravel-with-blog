@extends('layout')
@section('content')
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 border p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Login!</h1>
        <form action="/sessions" method="post" class="mt-10">
            @csrf

            <x-form.input name='email' type='email' />
            <x-form.input name='password' type='password' />

            <x-form.button>Name</x-form.button>
            {{-- @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-red-500 text-xs">{{ $error }}</li>
                @endforeach
            </ul>
            @endif --}}
        </form>
    </main>

</section>
@endsection
