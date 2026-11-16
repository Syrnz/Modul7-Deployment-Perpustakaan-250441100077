<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">
                Pengaturan Profil
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                Kelola informasi akun dan keamanan akun kamu.
            </p>
        </div>
    </x-slot>

    <div class="mx-auto max-w-7xl space-y-6 px-4 py-8 sm:px-6 lg:px-8">

        <!-- Informasi Profil -->
        <div class="overflow-hidden rounded-xl border border-gray-100 bg-white p-5 shadow-sm sm:p-8">
            <div class="mb-6 border-b border-gray-100 pb-4">
                <h3 class="text-lg font-bold text-gray-800">
                    Informasi Profil
                </h3>
                <p class="mt-1 text-sm text-gray-500">
                    Perbarui nama dan alamat email akun kamu.
                </p>
            </div>

            <div class="max-w-2xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Update Password -->
        <div class="overflow-hidden rounded-xl border border-gray-100 bg-white p-5 shadow-sm sm:p-8">
            <div class="mb-6 border-b border-gray-100 pb-4">
                <h3 class="text-lg font-bold text-gray-800">
                    Keamanan Akun
                </h3>
                <p class="mt-1 text-sm text-gray-500">
                    Perbarui password untuk menjaga keamanan akun.
                </p>
            </div>

            <div class="max-w-2xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Delete Account -->
        <div class="overflow-hidden rounded-xl border border-red-100 bg-white p-5 shadow-sm sm:p-8">
            <div class="mb-6 border-b border-red-100 pb-4">
                <h3 class="text-lg font-bold text-red-700">
                    Zona Berbahaya
                </h3>
                <p class="mt-1 text-sm text-gray-500">
                    Penghapusan akun bersifat permanen.
                </p>
            </div>

            <div class="max-w-2xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>

    </div>

</x-app-layout>
