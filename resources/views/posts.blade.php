@extends('layout')
{{-- @section('content')

</body>
</html>
@endsection --}}

@include('_posts-header')

<main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">


<x-post-featured-card :post="$posts[0]"/>


    <div class="lg:grid lg:grid-cols-2">
        <x-post-card/>
     <x-post-card/>
    </div>

    <div class="lg:grid lg:grid-cols-3">
        <x-post-card/>
        <x-post-card/>
        <x-post-card/>


    </div>
</main>
