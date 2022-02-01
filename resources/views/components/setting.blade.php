@props(['heading'])
@section('content')
<section class="py-8 max-w-4-xl mx-auto">
    <h1 class="mb-4  text-lg font-bold">{{ $heading }}</h1>
    <div class="flex">
        <aside class="w-48">
            <h1 class="font-semibold mb-4">Links</h1>
            <ul>
                <li>
                    <a href="/admin/posts/create"
                        class="{{ request()->is('admin/posts/create') ? 'text-blue-500': '' }}">New Post</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
</body>
@endsection
