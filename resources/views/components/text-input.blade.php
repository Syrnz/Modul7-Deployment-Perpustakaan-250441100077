@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge([
        'class' =>
            'block w-full rounded-lg border-gray-300 px-4 py-2.5 text-sm text-gray-700 shadow-sm placeholder:text-gray-400 focus:border-[#a82a2a] focus:ring-[#a82a2a] disabled:cursor-not-allowed disabled:bg-gray-100 disabled:text-gray-500',
    ]) }}>
