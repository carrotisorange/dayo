@props(['name'])
<x-label for="{{ $name }}" value="{{ ucwords($name)}}" />

<x-input id="{{ $name }}" class="block mt-1 w-full" type="text" name="{{ $name }}" value="{{ old($name) }}" autofocus />