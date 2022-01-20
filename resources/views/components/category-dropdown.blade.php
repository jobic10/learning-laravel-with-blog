<x-dropdown>
    @slot('trigger')
    <button class="inline-flex flex lg:inline-flex w-32 py-2 pr-9  pl-3 text-sm font-semibold">
        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}
        <x-icon name='down-arrow' style="right: 12px;" class="absolute pointer-events-none"></x-icon>
    </button>
    @endslot
    <x-dropdown-item href="/" :active="isset($currentCategory) ? false : request()->routeIs('home')">All
    </x-dropdown-item>

    @foreach ($categories as $category)
    <x-dropdown-item :active="request()->getRequestUri() == ('/?category='.$category->slug ?? false)"
        href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category','page')) }}">{{
        ucwords($category->name) }}</x-dropdown-item>
    @endforeach
</x-dropdown>
