<x-layouts.admin>
    <x-slot:title>Dashboard</x-slot:title>
    <!-- Page Content -->
    <div class="p-6">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-100">Welcome to the Admin Panel</h3>
            <p class="text-gray-400 mt-2">Manage your application effectively with quick access to important sections.</p>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-700 p-4 rounded-lg shadow-md text-center">
                    <h4 class="text-lg font-semibold text-gray-100">Users</h4>
                    <p class="text-gray-400">Manage registered users</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg shadow-md text-center">
                    <h4 class="text-lg font-semibold text-gray-100">Settings</h4>
                    <p class="text-gray-400">Configure application settings</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg shadow-md text-center">
                    <h4 class="text-lg font-semibold text-gray-100">Reports</h4>
                    <p class="text-gray-400">View system reports</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>