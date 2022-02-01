@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input class="border border-gray-400 p-2 w-full" type="{{ $type }}" value="{{ old($name) }}" class="form-control"
        name="{{ $name }}" id="{{ $name }}" required placeholder="{{ ucwords($name) }}">

    <x-form.error name='{{ $name }}' />
</x-form.field>
