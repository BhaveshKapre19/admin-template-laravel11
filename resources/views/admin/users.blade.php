<x-layouts.admin>
    <x-slot:title>Users</x-slot:title>
    <div>
        <div class="flex flex-col md:flex-row justify-between items-center mb-6">
            <div class="py-2 text-center">
                <h3 class="text-2xl font-bold text-gray-100 mb-2">User Management</h3>
                <p class="text-gray-400">Manage your application users and permissions efficiently.</p>
            </div>
            <a href="#"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg flex items-center space-x-2 shadow-md transition duration-300">
                <i class="fas fa-plus"></i>
                <span>Add New User</span>
            </a>
        </div>

        <!-- Search Bar -->
        <div class="mt-4 mb-6">
            <input type="text" id="userSearch" placeholder="Search users..."
                class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-100 placeholder-gray-400 transition duration-300">
        </div>

        <!-- Users Table -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">User</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Role</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Status</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody id="userTableBody" class="divide-y divide-gray-700">
                    @php
                        $users = [
                            ['id' => 1, 'name' => 'User 1', 'email' => 'user1@example.com', 'role' => 'Admin', 'status' => 'active', 'avatar' => 'https://picsum.photos/50?random=1'],
                            ['id' => 2, 'name' => 'User 2', 'email' => 'user2@example.com', 'role' => 'Editor', 'status' => 'active', 'avatar' => 'https://picsum.photos/50?random=2'],
                            ['id' => 3, 'name' => 'User 3', 'email' => 'user3@example.com', 'role' => 'User', 'status' => 'disabled', 'avatar' => 'https://picsum.photos/50?random=3'],
                            ['id' => 4, 'name' => 'User 4', 'email' => 'user4@example.com', 'role' => 'Admin', 'status' => 'active', 'avatar' => 'https://picsum.photos/50?random=4'],
                            ['id' => 5, 'name' => 'User 5', 'email' => 'user5@example.com', 'role' => 'Editor', 'status' => 'disabled', 'avatar' => 'https://picsum.photos/50?random=5'],
                            ['id' => 6, 'name' => 'User 6', 'email' => 'user6@example.com', 'role' => 'User', 'status' => 'active', 'avatar' => 'https://picsum.photos/50?random=6'],
                            ['id' => 7, 'name' => 'User 7', 'email' => 'user7@example.com', 'role' => 'Admin', 'status' => 'active', 'avatar' => 'https://picsum.photos/50?random=7'],
                            ['id' => 8, 'name' => 'User 8', 'email' => 'user8@example.com', 'role' => 'Editor', 'status' => 'active', 'avatar' => 'https://picsum.photos/50?random=8'],
                            ['id' => 9, 'name' => 'User 9', 'email' => 'user9@example.com', 'role' => 'User', 'status' => 'disabled', 'avatar' => 'https://picsum.photos/50?random=9'],
                            ['id' => 10, 'name' => 'User 10', 'email' => 'user10@example.com', 'role' => 'Admin', 'status' => 'active', 'avatar' => 'https://picsum.photos/50?random=10']
                        ];
                    @endphp

                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-750 transition duration-200">
                            <td class="py-4 px-6 flex items-center space-x-4">
                                <img src="{{ $user['avatar'] }}" alt="Avatar" class="w-10 h-10 rounded-full">
                                <div>
                                    <div class="text-gray-100 font-medium">{{ $user['name'] }}</div>
                                    <div class="text-gray-400 text-sm">{{ $user['email'] }}</div>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <span
                                    class="inline-block px-3 py-1 text-sm font-semibold rounded-full {{ $user['role'] === 'Admin' ? 'bg-purple-600 text-white' : ($user['role'] === 'Editor' ? 'bg-blue-500 text-white' : 'bg-gray-500 text-white') }}">
                                    {{ $user['role'] }}
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <span
                                    class="inline-flex items-center px-3 py-1 text-sm font-semibold rounded-full {{ $user['status'] === 'active' ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                                    {{ ucfirst($user['status']) }}
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center space-x-4">
                                    <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300 px-4 py-2"
                                        title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @if ($user['status'] === 'active')
                                        <a href="#"
                                            class="text-gray-400 hover:text-yellow-400 transition duration-300 px-4 py-2"
                                            title="Disable">
                                            <i class="fas fa-ban"></i>
                                        </a>
                                    @else
                                        <a href="#" class="text-gray-400 hover:text-green-400 transition duration-300 px-4 py-2"
                                            title="Enable">
                                            <i class="fas fa-check-circle"></i>
                                        </a>
                                    @endif
                                    <a href="#" class="text-gray-400 hover:text-red-400 transition duration-300 px-4 py-2"
                                        title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
        <script>
            document.getElementById('userSearch').addEventListener('input', function () {
                let filter = this.value.toLowerCase();
                let rows = document.querySelectorAll('#userTableBody tr');

                rows.forEach(row => {
                    let userName = row.querySelector('td:first-child div.text-gray-100').textContent.toLowerCase();
                    let userEmail = row.querySelector('td:first-child div.text-gray-400').textContent.toLowerCase();
                    let userRole = row.querySelector('td:nth-child(2) span').textContent.toLowerCase().trim();  // Fix for Role
                    let userStatus = row.querySelector('td:nth-child(3) span').textContent.toLowerCase().trim(); // Fix for Status

                    if (
                        userName.includes(filter) ||
                        userEmail.includes(filter) ||
                        userRole.includes(filter) ||
                        userStatus.includes(filter)
                    ) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        </script>
    @endpush


</x-layouts.admin>