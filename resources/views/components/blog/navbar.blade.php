<!-- Navigation -->
<nav x-data="{ isOpen: false }" class="bg-background shadow-lg fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold text-accent">Acme Blog</a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="#" class="p-2 rounded-lg hover:text-background hover:bg-accent transition">Home</a>
                <a href="#" class="p-2 rounded-lg hover:text-background hover:bg-accent transition">About</a>
                <a href="#" class="p-2 rounded-lg hover:text-background hover:bg-accent transition">Blog</a>
                <a href="#" class="p-2 rounded-lg hover:text-background hover:bg-accent transition">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="isOpen = !isOpen" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="isOpen" class="md:hidden py-4 space-y-4" @click.away="isOpen = false">
            <a href="#" class="block p-2 rounded-lg hover:text-background hover:bg-accent transition">Home</a>
            <a href="#" class="block p-2 rounded-lg hover:text-background hover:bg-accent transition">About</a>
            <a href="#" class="block p-2 rounded-lg hover:text-background hover:bg-accent transition">Blog</a>
            <a href="#" class="block p-2 rounded-lg hover:text-background hover:bg-accent transition">Contact</a>
        </div>
    </div>
</nav>