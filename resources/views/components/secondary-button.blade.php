<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-xs font-bold uppercase tracking-wider text-gray-700 shadow-sm transition duration-200 hover:border-[#a82a2a] hover:bg-red-50 hover:text-[#a82a2a] focus:outline-none focus:ring-2 focus:ring-[#a82a2a] focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50']) }}>
    {{ $slot }}
</button>
