@props(['name'])
@error($name)
<small class="text-red-500 text-xs-2">{{ $message }}</small>
@enderror
