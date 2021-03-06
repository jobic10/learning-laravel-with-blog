@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <textarea class="border border-gray-200 rounded p-2 w-full" class="form-control" name="{{ $name }}" id="{{ $name }}"
        required>{{ old($name) }}</textarea>
    <x-form.error name='{{ $name }}' />
</x-form.field>
