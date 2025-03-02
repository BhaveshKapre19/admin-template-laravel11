<x-layouts.admin>
    <x-slot:title>Roles Management</x-slot:title>

    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-2xl p-8 max-w-7xl mx-auto"
         x-data="{
             showRoleModal: false,
             editMode: false,
             currentRole: null,
             permissions: {{ json_encode($permissions) }},
             selectedPermissions: [],
             form: {
                 name: '',
                 description: ''
             },
             deleteConfirmation: false
         }">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    <i class="fas fa-shield-alt mr-3"></i>Roles Management
                </h2>
                <p class="mt-2 text-gray-400">Manage user roles and permissions</p>
            </div>
            <button @click="showRoleModal = true; editMode = false; form = { name: '', description: '' }; selectedPermissions = []"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 flex items-center">
                <i class="fas fa-plus mr-2"></i> New Role
            </button>
        </div>

        <!-- Roles Table -->
        <div class="rounded-xl overflow-hidden border border-gray-700/50">
            <table class="w-full">
                <thead class="bg-gray-700/30">
                    <tr>
                        <th class="px-6 py-4 text-left text-gray-300 font-semibold">Role</th>
                        <th class="px-6 py-4 text-left text-gray-300 font-semibold">Description</th>
                        <th class="px-6 py-4 text-left text-gray-300 font-semibold">Permissions</th>
                        <th class="px-6 py-4 text-right text-gray-300 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700/50">
                    @foreach($roles as $role)
                    <tr class="hover:bg-gray-800/20 transition-colors duration-200">
                        <td class="px-6 py-4 text-gray-200 font-medium">{{ $role->name }}</td>
                        <td class="px-6 py-4 text-gray-400 max-w-xs">{{ $role->description }}</td>
                        <td class="px-6 py-4">
                            <div class="flex flex-wrap gap-2">
                                @foreach($role->permissions as $permission)
                                <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm">
                                    {{ $permission->name }}
                                </span>
                                @endforeach
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right space-x-3">
                            <button @click="showRoleModal = true; editMode = true; form = { name: '{{ $role->name }}', description: '{{ $role->description }}' }; selectedPermissions = {{ json_encode($role->permissions->pluck('id')) }}"
                                    class="text-blue-400 hover:text-blue-300">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button @click="deleteConfirmation = true; currentRole = {{ $role->id }}"
                                    class="text-red-400 hover:text-red-300">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $roles->links() }}
        </div>

        <!-- Role Modal -->
        <div x-show="showRoleModal" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
            <div @click.away="showRoleModal = false" 
                 class="bg-gray-800 rounded-2xl w-full max-w-2xl p-8 relative">
                <h3 class="text-2xl font-bold mb-6" x-text="editMode ? 'Edit Role' : 'Create New Role'"></h3>
                
                <form x-bind:action="editMode ? '/admin/roles/' + currentRole : '/admin/roles'" 
                      method="POST"
                      x-ref="roleForm">
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Role Name</label>
                            <input type="text" name="name" x-model="form.name" required
                                   class="w-full bg-gray-700/50 border border-gray-600 rounded-lg px-4 py-3 text-gray-100
                                          focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Description</label>
                            <textarea name="description" x-model="form.description" rows="3"
                                      class="w-full bg-gray-700/50 border border-gray-600 rounded-lg px-4 py-3 text-gray-100
                                             focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-4">Permissions</label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <template x-for="permission in permissions" :key="permission.id">
                                    <label class="flex items-center space-x-3 p-3 bg-gray-700/30 rounded-lg hover:bg-gray-700/50 cursor-pointer transition-colors">
                                        <input type="checkbox" name="permissions[]" :value="permission.id" 
                                               x-model="selectedPermissions"
                                               class="form-checkbox h-5 w-5 text-blue-500 rounded border-gray-600">
                                        <span class="text-gray-200" x-text="permission.name"></span>
                                    </label>
                                </template>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-4 mt-8">
                            <button type="button" @click="showRoleModal = false"
                                    class="px-6 py-2 text-gray-300 hover:text-gray-100 transition-colors">
                                Cancel
                            </button>
                            <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                                <span x-text="editMode ? 'Update Role' : 'Create Role'"></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div x-show="deleteConfirmation" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
            <div class="bg-gray-800 rounded-2xl p-8 max-w-md w-full text-center">
                <h3 class="text-2xl font-bold mb-4 text-red-400">
                    <i class="fas fa-exclamation-triangle mr-2"></i>Delete Role
                </h3>
                <p class="text-gray-300 mb-6">Are you sure you want to delete this role? This action cannot be undone.</p>
                <div class="flex justify-center space-x-4">
                    <button @click="deleteConfirmation = false" 
                            class="px-6 py-2 text-gray-300 hover:text-gray-100">
                        Cancel
                    </button>
                    <form :action="'/admin/roles/' + currentRole" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg font-semibold">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 1rem;
            text-align: left;
        }
        
        th {
            background-color: rgba(55, 65, 81, 0.3);
        }
        
        tr:hover {
            background-color: rgba(55, 65, 81, 0.1);
        }
    </style>
    @endpush
</x-layouts.admin>