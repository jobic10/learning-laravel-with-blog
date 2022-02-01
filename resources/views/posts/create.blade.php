@extends('layout')
<x-setting heading="Publish New Post">
    <form action="/admin/posts" method="post" enctype="multipart/form-data">
        @csrf
        <x-form.input name='title' />
        <x-form.input name='slug' />
        <x-form.input name='excerpt' />
        <x-form.input name='thumbnail' type='file' />
        <x-form.textarea name='body' />

        <x-form.field>
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">Category</label>
            <select name="category_id" class="border border-gray-400 p-2 w-full">
                @foreach (\App\Models\Category::all() as $category)
                <option value=" {{ $category->id }}" {{ old('category_id')==$category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
            <x-form.error name="category" />
        </x-form.field>
        <button type="submit"
            class="px-8 py-3 mt-4 text-xs font-semibold text-white uppercase transition-colors duration-300 bg-blue-500 rounded-full hover:bg-blue-600 lg:mt-0 lg:ml-3">
            Publish
        </button>
    </form>
</x-setting>
