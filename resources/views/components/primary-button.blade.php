<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center rounded-lg border border-transparent bg-[#a82a2a] px-4 py-2.5 text-xs font-bold uppercase tracking-wider text-white shadow-sm transition duration-200 hover:bg-[#801f1f] focus:outline-none focus:ring-2 focus:ring-[#a82a2a] focus:ring-offset-2 active:bg-[#701919] disabled:cursor-not-allowed disabled:opacity-50']) }}>
    {{ $slot }}
</button>
