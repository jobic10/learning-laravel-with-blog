@extends('layout')
@section('content')
<section class="px-6 py-8">

    <form action="/admin/posts" method="post">
        @csrf
        <x-panel class="max-w-sm mx-auto">
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">Title</label>
                <input class="border border-gray-400 p-2 w-full" type="text" value="{{ old('title') }}"
                    class="form-control" name="title" id="title" required placeholder="Title">
                @error('title')
                <small class="text-red-500 text-xs-2">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">Excerpt</label>
                <input class="border border-gray-400 p-2 w-full" type="text" value="{{ old('excerpt') }}"
                    class="form-control" name="excerpt" id="excerpt" required placeholder="Excerpt">
                @error('excerpt')
                <small class="text-red-500 text-xs-2">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">Slug</label>
                <input value="{{ old('slug') }}" class="border border-gray-400 p-2 w-full" type="text"
                    class="form-control" name="slug" id="slug" required placeholder="Slug">
                @error('slug')
                <small class="text-red-500 text-xs-2">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">Body</label>
                <textarea class="border border-gray-400 p-2 w-full" class="form-control" name="body" id="body"
                    required>{{ old('body') }}</textarea>
                @error('body')
                <small class="text-red-500 text-xs-2">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">Category</label>
                <select name="category_id" id="">
                    @foreach (\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                @error('category')
                <small class="text-red-500 text-xs-2">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit"
                class="px-8 py-3 mt-4 text-xs font-semibold text-white uppercase transition-colors duration-300 bg-blue-500 rounded-full hover:bg-blue-600 lg:mt-0 lg:ml-3">
                Publish
            </button>
        </x-panel>
    </form>
</section>
</body>
@endsection
