<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - {{ $title ?? 'Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" defer></script>
    @stack('styles')
</head>

<body class="bg-gray-900 h-full">
    <div x-data="{ sidebarOpen: false }" class="flex min-h-screen">
        <!-- Enhanced Sidebar -->
        <div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="bg-gray-800 w-64 p-4 fixed inset-y-0 left-0 transform transition-transform duration-300 ease-in-out lg:relative lg:translate-x-0 border-r border-gray-700 shadow-2xl">
            <div class="flex items-center justify-between mb-8 mt-2">
                <h1 class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">
                    Admin Panel
                </h1>
                <button @click="sidebarOpen = false" class="lg:hidden text-gray-300 hover:text-white transition-colors">
                    <i class="fa-solid fa-xmark p-2 rounded-lg hover:bg-gray-700"></i>
                </button>
            </div>
            <nav>
                <ul class="space-y-2">
                    <x-admin.sidebar-link route="" icon="fa-solid fa-house">
                        <span class="group-hover:translate-x-1 transition-transform">Dashboard</span>
                    </x-admin.sidebar-link>
                    
                    <x-admin.sidebar-link route="" icon="fa-solid fa-users">
                        <span class="group-hover:translate-x-1 transition-transform">Users</span>
                    </x-admin.sidebar-link>
                    
                    <x-admin.sidebar-link route="" icon="fa-solid fa-newspaper">
                        <span class="group-hover:translate-x-1 transition-transform">Posts</span>
                    </x-admin.sidebar-link>
                    
                    <x-admin.sidebar-dropdown title="Settings" icon="fa-solid fa-cog">
                        <x-admin.sidebar-link icon="fa-regular fa-user">Profile</x-admin.sidebar-link>
                        <x-admin.sidebar-link icon="fa-solid fa-shield-halved">Security</x-admin.sidebar-link>
                        <x-admin.sidebar-link icon="fa-regular fa-bell">Notifications</x-admin.sidebar-link>
                    </x-admin.sidebar-dropdown>
                    
                    <x-admin.sidebar-link route="" icon="fa-solid fa-arrow-right-from-bracket">
                        <span class="group-hover:translate-x-1 transition-transform">Logout</span>
                    </x-admin.sidebar-link>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Enhanced Top Navbar -->
            <div class="bg-gradient-to-r from-gray-800 to-gray-700 p-4 flex justify-between items-center shadow-xl">
                <button @click="sidebarOpen = true" class="lg:hidden text-gray-300 hover:text-white transition-colors">
                    <i class="fa-solid fa-bars p-2 rounded-lg hover:bg-gray-700"></i>
                </button>
                <h2 class="text-xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-400">
                    {{ $title ?? 'Dashboard' }}
                </h2>
                <div class="flex items-center space-x-4">
                    <div class="relative hidden lg:block">
                        <input type="text" placeholder="Search..." 
                            class="pl-10 pr-4 py-2 w-64 rounded-lg bg-gray-700 text-gray-200 
                                   focus:outline-none focus:ring-2 focus:ring-blue-500 
                                   transition-all duration-200 shadow-sm">
                        <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="flex items-center space-x-2 bg-gray-700 hover:bg-gray-600 px-4 py-2 rounded-lg 
                                  transition-all duration-200 hover:translate-y-[-1px] shadow-md">
                        <i class="fa-solid fa-arrow-right-from-bracket text-red-400"></i>
                        <span class="text-gray-200">Logout</span>
                    </button>
                </div>
            </div>

            <!-- Page Content -->
            <div class="p-6 flex-1">
                <div class="bg-gray-800 p-6 rounded-xl shadow-2xl border border-gray-700">
                    <!-- Enhanced Alerts -->
                    @if(session('success'))
                        <x-admin.alert type="success" :message="session('success')" 
                            icon="fa-solid fa-circle-check" />
                    @endif

                    @if(session('error'))
                        <x-admin.alert type="error" :message="session('error')" 
                            icon="fa-solid fa-circle-exclamation" />
                    @endif

                    @if(session('warning'))
                        <x-admin.alert type="warning" :message="session('warning')" 
                            icon="fa-solid fa-triangle-exclamation" />
                    @endif

                    @if(session('info'))
                        <x-admin.alert type="info" :message="session('info')" 
                            icon="fa-solid fa-circle-info" />
                    @endif

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <x-admin.alert type="error" :message="$error" 
                                icon="fa-solid fa-circle-exclamation" />
                        @endforeach
                    @endif

                    <!-- Content Card -->
                    <div class="mt-6 p-4 bg-gray-850 rounded-lg border border-gray-700 shadow-lg">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>