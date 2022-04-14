@props(['name', 'type', 'value' => ''])

<div class="mt-10 flex flex-col text-center">
    <label class="block text-sm  mb-2" for="{{ $name }}">{{ $name }}</label>
    <input class="p-2" type="{{ $type }}" name="{{ $name }}" value="{{$value ? $value : ''}}">
    <x-form.error name="{{ $name }}" />
</div>
