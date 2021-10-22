@extends('layout')
@section('content')
<article>
<h1>
{{ $post->title }}
</h1>
<p>
{!! $post->body !!}
</p>
</article>
<x-skeleton >
<x-slot name='name'>
    <h4>This is much better </h4>
</x-slot>
</x-skeleton>
<a href="/">Go back</a>
</body>
</html>
@endsection
