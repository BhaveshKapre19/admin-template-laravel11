<x-layouts.auth>
    <x-slot:title>Account Disabled</x-slot:title>
    <div class="min-h-screen flex items-center justify-center bg-gray-900">
        <div class="bg-gray-800 p-8 rounded-xl shadow-lg w-full max-w-md">
            <!-- Logo or App Name -->
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-red-500">Account Disabled</h1>
                <p class="text-gray-400">Your account has been disabled. Please contact support for assistance.</p>
            </div>
            
            <div class="text-center mt-6 space-y-4">
                <a href="" class="block w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">
                    Contact Support
                </a>
                <a href="" class="block w-full bg-gray-600 text-white py-2 px-4 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-300">
                    Logout
                </a>
            </div>
        </div>
    </div>
</x-layouts.auth>
