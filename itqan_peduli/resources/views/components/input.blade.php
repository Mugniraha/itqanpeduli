@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' w-full py-3 px-4 border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent shadow-sm']) !!}>
