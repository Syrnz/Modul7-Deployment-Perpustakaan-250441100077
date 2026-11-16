<nav x-data="{ open: false, profileOpen: false }" class="sticky top-0 z-50 shadow-md" style="background-color: #a82a2a;">

    <div class="mx-auto max-w-7xl px-4">

        <!-- Desktop Navigation -->
        <div class="flex min-h-14 items-center justify-between">

            <!-- Menu Kiri -->
            <div class="hidden items-center gap-2 font-bold sm:flex">

                <!-- Beranda -->
                <a href="{{ route('home') }}"
                    class="inline-block px-4 py-4 text-white transition-colors duration-200 hover:bg-white/10
                    {{ request()->routeIs('home') ? 'bg-white/10' : '' }}">
                    Beranda
                </a>

                <!-- Dashboard -->
                @canany(['akses dashboard admin', 'akses dashboard petugas'])
                    <div class="relative group">
                        <button type="button" class="inline-flex items-center gap-2 px-4 py-4 text-white hover:bg-white/10">
                            Dashboard
                            <svg class="h-4 w-4 transition-transform group-hover:rotate-180" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                            </svg>
                        </button>

                        <div
                            class="absolute left-0 top-full z-50 hidden min-w-52 rounded-lg border bg-white py-2 shadow-lg group-hover:block">

                            @can('akses dashboard admin')
                                <a href="{{ route('admin.dashboard') }}"
                                    class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-100">
                                    Dashboard Admin
                                </a>
                            @endcan

                            @can('akses dashboard petugas')
                                <a href="{{ route('petugas.dashboard') }}"
                                    class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-100">
                                    Dashboard Petugas
                                </a>
                            @endcan

                        </div>
                    </div>
                @endcanany

                <!-- Daftar Buku -->
                @can('lihat daftar buku')
                    <a href="{{ route('buku.index') }}"
                        class="inline-block px-4 py-4 text-white transition-colors duration-200 hover:bg-white/10
                        {{ request()->routeIs('buku.index', 'buku.detail') ? 'bg-white/10' : '' }}">
                        Daftar Buku
                    </a>
                @endcan

                <!-- Kelola Buku -->
                @can('kelola data buku')
                    <a href="{{ route('buku.kelola') }}"
                        class="inline-block px-4 py-4 text-white transition-colors duration-200 hover:bg-white/10
                        {{ request()->routeIs('buku.kelola') ? 'bg-white/10' : '' }}">
                        Kelola Buku
                    </a>
                @endcan

                <!-- Manajemen Pengguna -->
                @can('kelola data pengguna')
                    <a href="{{ route('users.index') }}"
                        class="inline-block px-4 py-4 text-white transition-colors duration-200 hover:bg-white/10
                        {{ request()->routeIs('users.*') ? 'bg-white/10' : '' }}">
                        Manajemen Pengguna
                    </a>
                @endcan

                <!-- Riwayat Peminjaman -->
                @can('lihat riwayat peminjaman sendiri')
                    <a href="{{ route('peminjaman.riwayat') }}"
                        class="inline-block px-4 py-4 text-white transition-colors duration-200 hover:bg-white/10
                        {{ request()->routeIs('peminjaman.riwayat') ? 'bg-white/10' : '' }}">
                        Riwayat Peminjaman
                    </a>
                @endcan

                <!-- Layanan -->
                @canany(['kelola peminjaman', 'kelola pengembalian', 'lihat laporan perpustakaan'])
                    <div class="relative group">
                        <button type="button"
                            class="inline-flex items-center gap-2 px-4 py-4 text-white hover:bg-white/10">
                            Layanan
                            <svg class="h-4 w-4 transition-transform group-hover:rotate-180" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                            </svg>
                        </button>

                        <div
                            class="absolute left-0 top-full z-50 hidden min-w-56 rounded-lg border bg-white py-2 shadow-lg group-hover:block">

                            @can('kelola peminjaman')
                                <a href="{{ route('peminjaman.index') }}"
                                    class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-100">
                                    Peminjaman
                                </a>
                            @endcan

                            @can('kelola pengembalian')
                                <a href="{{ route('pengembalian.index') }}"
                                    class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-100">
                                    Pengembalian
                                </a>
                            @endcan

                            @can('lihat laporan perpustakaan')
                                <a href="{{ route('laporan.index') }}"
                                    class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-100">
                                    Laporan Perpustakaan
                                </a>
                            @endcan

                        </div>
                    </div>
                @endcanany

            </div>

            <!-- Menu Kanan Desktop -->
            <div class="hidden items-center gap-2 font-bold sm:flex">

                @auth
                    <div class="relative">

                        <button @click="profileOpen = !profileOpen" @click.outside="profileOpen = false" type="button"
                            class="flex items-center gap-2 rounded px-4 py-3 text-white transition hover:bg-white/10">

                            <span>{{ Auth::user()->name }}</span>

                            <svg class="h-4 w-4 transition-transform" :class="{ 'rotate-180': profileOpen }"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="profileOpen" x-transition
                            class="absolute right-0 mt-2 w-48 overflow-hidden rounded-lg bg-white py-2 shadow-lg"
                            style="display: none;">

                            @can('lihat profil sendiri')
                                <a href="{{ route('profile.edit') }}"
                                    class="block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">
                                    Profil Saya
                                </a>
                            @endcan

                            <div class="my-1 border-t border-gray-100"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="block w-full px-4 py-2 text-left text-sm font-medium text-red-600 hover:bg-red-50">
                                    Logout
                                </button>
                            </form>

                        </div>
                    </div>
                @endauth

            </div>

            <!-- Hamburger Mobile -->
            <div class="flex w-full items-center justify-between sm:hidden">

                <a href="{{ route('home') }}" class="py-4 font-bold text-white">
                    Ribuan Kata
                </a>

                <button @click="open = !open" type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-white transition hover:bg-white/10 focus:outline-none">

                    <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg x-show="open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </button>
            </div>

        </div>

        <!-- Mobile Navigation -->
        <div x-show="open" x-transition class="border-t border-white/20 pb-3 sm:hidden" style="display: none;">

            <div class="space-y-1 pt-2 font-semibold">

                <a href="{{ route('home') }}"
                    class="block rounded px-4 py-3 text-white transition hover:bg-white/10
                    {{ request()->routeIs('home') ? 'bg-white/10' : '' }}">
                    Beranda
                </a>

                @can('lihat daftar buku')
                    <a href="{{ route('buku.index') }}"
                        class="block rounded px-4 py-3 text-white transition hover:bg-white/10">
                        Daftar Buku
                    </a>
                @endcan

                @can('kelola data buku')
                    <a href="{{ route('buku.kelola') }}"
                        class="block rounded px-4 py-3 text-white transition hover:bg-white/10">
                        Kelola Buku
                    </a>
                @endcan

                @can('kelola data pengguna')
                    <a href="{{ route('users.index') }}"
                        class="block rounded px-4 py-3 text-white transition hover:bg-white/10">
                        Manajemen Pengguna
                    </a>
                @endcan

                @can('lihat riwayat peminjaman sendiri')
                    <a href="{{ route('peminjaman.riwayat') }}"
                        class="block rounded px-4 py-3 text-white transition hover:bg-white/10">
                        Riwayat Peminjaman
                    </a>
                @endcan

                @can('akses dashboard admin')
                    <a href="{{ route('admin.dashboard') }}"
                        class="block rounded px-4 py-3 text-white transition hover:bg-white/10">
                        Dashboard Admin
                    </a>
                @endcan

                @can('akses dashboard petugas')
                    <a href="{{ route('petugas.dashboard') }}"
                        class="block rounded px-4 py-3 text-white transition hover:bg-white/10">
                        Dashboard Petugas
                    </a>
                @endcan

                @can('kelola peminjaman')
                    <a href="{{ route('peminjaman.index') }}"
                        class="block rounded px-4 py-3 text-white transition hover:bg-white/10">
                        Peminjaman
                    </a>
                @endcan

                @can('kelola pengembalian')
                    <a href="{{ route('pengembalian.index') }}"
                        class="block rounded px-4 py-3 text-white transition hover:bg-white/10">
                        Pengembalian
                    </a>
                @endcan

                @can('lihat laporan perpustakaan')
                    <a href="{{ route('laporan.index') }}"
                        class="block rounded px-4 py-3 text-white transition hover:bg-white/10">
                        Laporan Perpustakaan
                    </a>
                @endcan

            </div>

            <!-- Mobile Account Menu -->
            @auth
                <div class="mt-3 border-t border-white/20 pt-3">

                    <div class="px-4 py-2 text-white">
                        <p class="font-bold">{{ Auth::user()->name }}</p>
                        <p class="text-sm text-white/80">{{ Auth::user()->email }}</p>
                    </div>

                    @can('lihat profil sendiri')
                        <a href="{{ route('profile.edit') }}"
                            class="block rounded px-4 py-3 font-semibold text-white hover:bg-white/10">
                            Profil Saya
                        </a>
                    @endcan

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="block w-full rounded px-4 py-3 text-left font-semibold text-white hover:bg-white/10">
                            Logout
                        </button>
                    </form>

                </div>
            @endauth

        </div>

    </div>
</nav>
