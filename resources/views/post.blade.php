@extends('layout')
@section('content')
<article>
<h1>
{{ $post->title }}
</h1>
<p>
       By <a href="/user/{{ $post->author->username }}">{{ $post->author->username }}</a> in  <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>
<p>
{!! $post->body !!}
</p>
</article>
<x-skeleton >
    This is much bette
</x-skeleton>
<a href="/">Go back</a>
</body>
</html>
@endsection
