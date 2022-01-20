@extends('layout')
{{-- @section('content')

</body>

</html>
@endsection --}}

@include('posts._header')

<main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">
    @if ($posts->count())
    <x-posts-grid :posts="$posts"></x-posts-grid>
    {{ $posts->links() }}
    @else
    <p class="text-center">No posts yet. Check back later!</p>
    @endif
</main>
