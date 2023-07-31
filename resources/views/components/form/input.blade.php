@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name) }}" class="border border-gray-400 p-2 w-full" required>
    <x-form.error name="{{ $name }}" />
</x-form.field>