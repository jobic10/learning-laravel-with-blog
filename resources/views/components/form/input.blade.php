@props(['name', 'type' => 'text'])

<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $name }}">{{ ucwords($name) }}</label>
    <input class="border border-gray-400 p-2 w-full" type="{{ $type }}" value="{{ old($name) }}" class="form-control"
        name="{{ $name }}" id="{{ $name }}" required placeholder="{{ ucwords($name) }}">
    @error($name)
    <small class="text-red-500 text-xs-2">{{ $message }}</small>
    @enderror
</div>
