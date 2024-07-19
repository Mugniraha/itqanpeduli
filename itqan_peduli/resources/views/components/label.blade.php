@props(['value'])

<label {{ $attributes->merge(['class' => 'absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
