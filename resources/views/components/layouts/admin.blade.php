<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - {{ $title ?? 'Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" defer></script>
</head>

<body class="bg-gray-900">
    <div x-data="{ sidebarOpen: false }" class="flex min-h-screen">
        <!-- Sidebar -->
        <div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="bg-gray-800 w-56 p-4 fixed inset-y-0 left-0 transform transition-transform duration-300 ease-in-out lg:relative lg:translate-x-0">
            <div class="flex items-center justify-between mb-6 mt-2">
                <h1 class="text-xl font-bold text-gray-100">Admin Panel - LWB</h1>
                <button @click="sidebarOpen = false" class="lg:hidden text-gray-300 focus:outline-none">
                    ✕
                </button>
            </div>
            <nav>
                <ul class="space-y-2">
                    <x-admin.sidebar-link icon="fa-solid fa-house">Dashboard</x-admin.sidebar-link>
                    <x-admin.sidebar-link icon="fa-solid fa-users">Users</x-admin.sidebar-link>
                    <x-admin.sidebar-link icon="fa-solid fa-newspaper">Posts</x-admin.sidebar-link>
                    <x-admin.sidebar-dropdown title="Settings" icon="fa-solid fa-cog">
                        <x-admin.sidebar-link icon="fa-solid fa-user">Profile</x-admin.sidebar-link>
                        <x-admin.sidebar-link icon="fa-solid fa-shield-alt">Security</x-admin.sidebar-link>
                        <x-admin.sidebar-link icon="fa-solid fa-bell">Notifications</x-admin.sidebar-link>
                    </x-admin.sidebar-dropdown>
                    <x-admin.sidebar-link icon="fa-solid fa-sign-out-alt">Logout</x-admin.sidebar-link>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Navbar -->
            <div class="bg-gray-800 p-4 flex justify-between items-center shadow-lg">
                <button @click="sidebarOpen = true" class="lg:hidden text-gray-300 focus:outline-none">
                    ☰
                </button>
                <h2 class="text-xl font-semibold text-gray-100">{{ $title ?? 'Dashboard' }}</h2>
                <input type="text" placeholder="Search..."
                    class="hidden lg:block px-4 py-2 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Logout</button>
            </div>

            <!-- Page Content -->
            <div class="p-6">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>


    @stack('scripts')

</body>

</html>