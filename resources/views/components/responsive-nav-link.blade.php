@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-green-400 text-base font-medium text-black bg-white no-underline hover:no-underline focus:outline-none focus:text-black focus:bg-white focus:border-green-700 transition duration-150 ease-in-out'
            : 'block pl-3 mb-3 pr-4   py-2 border-l-4 text-white border-transparent   font-medium no-underline hover:no-underline hover:text-red hover:border-green-300 focus:outline-none focus:text-black focus:bg-white focus:border-green-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
