@extends('layout')
@section('content')
<section class="py-8 max-w-md mx-auto">
    <h1 class="mb-4  text-lg font-bold">Publish New Post</h1>
    <form action="/admin/posts" method="post" enctype="multipart/form-data">
        @csrf
        <x-panel>
            <x-form.input name='title' />
            <x-form.input name='slug' />
            <x-form.input name='excerpt' />
            <x-form.input name='thumbnail' type='file' />



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
                <select name="category_id" class="border border-gray-400 p-2 w-full">
                    @foreach (\App\Models\Category::all() as $category)
                    <option value=" {{ $category->id }}" {{ old('category_id')==$category->id ? 'selected' : '' }}>
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
