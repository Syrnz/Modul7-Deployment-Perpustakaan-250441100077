@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'block w-full border-l-4 border-[#a82a2a] bg-red-50 py-2 pe-4 ps-3 text-start text-base font-semibold text-[#a82a2a] focus:outline-none transition duration-150 ease-in-out'
            : 'block w-full border-l-4 border-transparent py-2 pe-4 ps-3 text-start text-base font-medium text-gray-600 hover:border-[#a82a2a]/40 hover:bg-red-50 hover:text-[#a82a2a] focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
