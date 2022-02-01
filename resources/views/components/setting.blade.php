@props(['heading'])
@section('content')
<section class="py-8 max-w-md mx-auto">
    <h1 class="mb-4  text-lg font-bold">{{ $heading }}</h1>
    <x-panel>
        {{ $slot }}
    </x-panel>
</section>
</body>
@endsection
