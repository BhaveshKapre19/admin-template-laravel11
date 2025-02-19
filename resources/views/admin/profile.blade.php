<x-layouts.admin>
    <x-slot:title>Profile</x-slot:title>
    <div>
        <h3 class="text-2xl font-bold text-gray-100 mb-2">Profile Settings</h3>
        <p class="text-gray-400">Manage your profile information here.</p>

        <!-- Profile Card -->
        <div class="bg-gray-800 p-8 rounded-xl shadow-lg mt-6 max-w-2xl mx-auto">
            <!-- Avatar and Name -->
            <div class="text-center">
                <img src="https://picsum.photos/200" alt="Avatar" class="w-32 h-32 rounded-full border-4 border-gray-700 mx-auto">
                <h2 class="text-2xl font-bold text-gray-100 mt-4">Bhavesh Kapre</h2>
                <p class="text-gray-400 mt-1">Software Developer</p>
            </div>

            <!-- Profile Details -->
            <div class="mt-6 space-y-4">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-envelope text-gray-400 w-6"></i>
                    <p class="text-gray-300">bhavesh.kapre@example.com</p>
                </div>
                <div class="flex items-center space-x-4">
                    <i class="fas fa-user-tag text-gray-400 w-6"></i>
                    <p class="text-gray-300">Admin</p>
                </div>
                <div class="flex items-center space-x-4">
                    <i class="fas fa-file-alt text-gray-400 w-6"></i>
                    <p class="text-gray-300">Number of Posts: 15</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-8 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-edit"></i>
                    <span>Edit Profile</span>
                </a>
                <a href="#" class="bg-yellow-600 text-white py-2 px-6 rounded-lg hover:bg-yellow-700 transition duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-key"></i>
                    <span>Reset Password</span>
                </a>
                <form method="POST" action="#" onsubmit="return confirm('Are you sure you want to delete your profile?');" class="w-full sm:w-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white py-2 px-6 rounded-lg hover:bg-red-700 transition duration-300 w-full flex items-center justify-center space-x-2">
                        <i class="fas fa-trash"></i>
                        <span>Delete Profile</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>