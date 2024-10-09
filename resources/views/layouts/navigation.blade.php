<nav x-data="{ open: false }" class="bg-transparent z-50 fixed top-0 left-0 w-full transition-all duration-300" :class="{'bg-gray-200 bg-opacity-50': isScrolled}">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Left side: Logo and Dashboard Link -->
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
            </div>

            <!-- Right side: Page Sections Links -->
            <div class="hidden space-x-8 sm:flex items-center">
                <a href="/#home" class="text-gray-800 hover:text-blue-600 transition-colors">Home</a>
                <a href="/#fitur" class="text-gray-800 hover:text-blue-600 transition-colors">Fitur</a>
                <a href="/#video" class="text-gray-800 hover:text-blue-600 transition-colors">Video</a>
                <a href="/#pengguna" class="text-gray-800 hover:text-blue-600 transition-colors">Pengguna</a>
                <a href="/#biaya" class="text-gray-800 hover:text-blue-600 transition-colors">Biaya</a>
                <a href="/#contact" class="text-gray-800 hover:text-blue-600 transition-colors">Contact</a>
                <a href="/#daftar" class="text-blue-600 font-bold hover:text-blue-800 transition-colors">Daftar</a>
                @auth
                <a href="{{ route('cms.edit') }}" class="text-gray-800 hover:text-blue-600 transition-colors">CMS Dashboard</a>
@endauth
            </div>

            <!-- Hamburger (Mobile Menu Button) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="#home">Home</x-responsive-nav-link>
            <x-responsive-nav-link href="#fitur">Fitur</x-responsive-nav-link>
            <x-responsive-nav-link href="#video">Video</x-responsive-nav-link>
            <x-responsive-nav-link href="#pengguna">Pengguna</x-responsive-nav-link>
            <x-responsive-nav-link href="#biaya">Biaya</x-responsive-nav-link>
            <x-responsive-nav-link href="#contact">Contact</x-responsive-nav-link>
            <x-responsive-nav-link href="#daftar">Daftar</x-responsive-nav-link>
        </div>
    </div>
</nav>
