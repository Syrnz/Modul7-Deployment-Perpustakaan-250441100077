<a
    {{ $attributes->merge(['class' => 'block w-full px-4 py-2.5 text-start text-sm text-gray-700 transition duration-150 hover:bg-red-50 hover:text-[#a82a2a] focus:bg-red-50 focus:text-[#a82a2a] focus:outline-none']) }}>
    {{ $slot }}
</a>
