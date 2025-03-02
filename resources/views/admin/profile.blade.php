<x-layouts.admin>
    <x-slot:title>Profile</x-slot:title>
    <div class="space-y-6">
        <!-- Header Section -->
        <div class="pb-4 border-b border-gray-700">
            <h3 class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                Profile Settings
            </h3>
            <p class="mt-2 text-gray-400 font-light">Manage your account information and security settings</p>
        </div>

        <!-- Profile Card -->
        <div class="bg-gray-800 p-8 rounded-2xl shadow-2xl border border-gray-700 max-w-3xl mx-auto">
            <!-- Avatar Section -->
            <div class="text-center group relative">
                <div class="relative inline-block">
                    <img src="https://picsum.photos/200" alt="Avatar" 
                         class="w-32 h-32 rounded-full border-4 border-gray-700 shadow-xl
                                transition-transform duration-300 hover:scale-105">
                    <button class="absolute bottom-0 right-2 bg-blue-600 p-2 rounded-full hover:bg-blue-700 transition-all
                                 shadow-md hover:shadow-lg border-2 border-blue-800">
                        <i class="fas fa-camera text-white text-sm"></i>
                    </button>
                </div>
                <h2 class="text-2xl font-bold text-gray-100 mt-5">Bhavesh Kapre</h2>
                <p class="text-gray-400 mt-1 flex items-center justify-center space-x-2">
                    <span>Software Developer</span>
                    <span class="text-blue-400">•</span>
                    <span class="text-green-400 flex items-center">
                        <i class="fas fa-circle text-[8px] mr-2"></i>
                        Active
                    </span>
                </p>
            </div>

            <!-- Profile Details Grid -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-gray-850 p-4 rounded-xl border border-gray-700 hover:border-blue-500 transition-all">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-500/20 p-2 rounded-lg">
                            <i class="fas fa-envelope text-blue-400"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">Email</p>
                            <p class="text-gray-200 font-medium">bhavesh.kapre@example.com</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-850 p-4 rounded-xl border border-gray-700 hover:border-purple-500 transition-all">
                    <div class="flex items-center space-x-3">
                        <div class="bg-purple-500/20 p-2 rounded-lg">
                            <i class="fas fa-user-tag text-purple-400"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">Role</p>
                            <p class="text-gray-200 font-medium">Administrator</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-850 p-4 rounded-xl border border-gray-700 hover:border-green-500 transition-all">
                    <div class="flex items-center space-x-3">
                        <div class="bg-green-500/20 p-2 rounded-lg">
                            <i class="fas fa-file-alt text-green-400"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">Posts Published</p>
                            <p class="text-gray-200 font-medium">15 Articles</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-850 p-4 rounded-xl border border-gray-700 hover:border-yellow-500 transition-all">
                    <div class="flex items-center space-x-3">
                        <div class="bg-yellow-500/20 p-2 rounded-lg">
                            <i class="fas fa-clock text-yellow-400"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">Last Active</p>
                            <p class="text-gray-200 font-medium">2 hours ago</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <button class="group bg-gray-850 hover:bg-blue-600/20 p-4 rounded-xl border border-gray-700 
                             hover:border-blue-500 transition-all duration-300">
                    <div class="flex items-center justify-center space-x-2">
                        <i class="fas fa-edit text-blue-400 group-hover:text-blue-300"></i>
                        <span class="text-gray-200 group-hover:text-white">Edit Profile</span>
                    </div>
                </button>

                <button class="group bg-gray-850 hover:bg-purple-600/20 p-4 rounded-xl border border-gray-700 
                             hover:border-purple-500 transition-all duration-300">
                    <div class="flex items-center justify-center space-x-2">
                        <i class="fas fa-key text-purple-400 group-hover:text-purple-300"></i>
                        <span class="text-gray-200 group-hover:text-white">Reset Password</span>
                    </div>
                </button>

                <form method="POST" action="#" onsubmit="return confirm('Are you sure you want to delete your profile?');" 
                      class="col-span-full sm:col-span-1 lg:col-span-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="w-full group bg-gray-850 hover:bg-red-600/20 p-4 rounded-xl border border-gray-700 
                                   hover:border-red-500 transition-all duration-300">
                        <div class="flex items-center justify-center space-x-2">
                            <i class="fas fa-trash text-red-400 group-hover:text-red-300"></i>
                            <span class="text-gray-200 group-hover:text-white">Delete Account</span>
                        </div>
                    </button>
                </form>
            </div>

            <!-- Security Section -->
            <div class="mt-8 pt-6 border-t border-gray-700">
                <h4 class="text-xl font-semibold text-gray-100 mb-4">Security Overview</h4>
                <div class="space-y-4">
                    <div class="flex items-center justify-between bg-gray-850 p-4 rounded-xl border border-gray-700">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-shield-halved text-green-400"></i>
                            <span class="text-gray-200">Two-Factor Authentication</span>
                        </div>
                        <span class="text-sm px-3 py-1 rounded-full bg-green-500/20 text-green-400">Active</span>
                    </div>
                    
                    <div class="flex items-center justify-between bg-gray-850 p-4 rounded-xl border border-gray-700">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-clock-rotate-left text-blue-400"></i>
                            <span class="text-gray-200">Last Password Change</span>
                        </div>
                        <span class="text-sm text-gray-400">15 days ago</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>