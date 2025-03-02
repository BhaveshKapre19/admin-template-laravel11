<x-layouts.admin>
    <x-slot:title>Categories Management</x-slot:title>

    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-2xl p-8 max-w-7xl mx-auto"
         x-data="{
             showCategoryModal: false,
             editMode: false,
             currentCategory: null,
             form: {
                 name: '',
                 slug: '',
                 description: ''
             },
             autoSlug: true,
             deleteConfirmation: false,
             generateSlug() {
                 if (this.autoSlug) {
                     this.form.slug = this.form.name.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                 }
             }
         }">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold bg-gradient-to-r from-green-400 to-blue-500 bg-clip-text text-transparent">
                    <i class="fas fa-folder-open mr-3"></i>Categories Management
                </h2>
                <p class="mt-2 text-gray-400">Organize your content with categories</p>
            </div>
            <button @click="showCategoryModal = true; editMode = false; form = { name: '', slug: '', description: '' }; autoSlug = true"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 flex items-center">
                <i class="fas fa-plus mr-2"></i> New Category
            </button>
        </div>

        <!-- Categories Table -->
        <div class="rounded-xl overflow-hidden border border-gray-700/50">
            <table class="w-full">
                <thead class="bg-gray-700/30">
                    <tr>
                        <th class="px-6 py-4 text-left text-gray-300 font-semibold">Name</th>
                        <th class="px-6 py-4 text-left text-gray-300 font-semibold">Description</th>
                        <th class="px-6 py-4 text-left text-gray-300 font-semibold">Slug</th>
                        <th class="px-6 py-4 text-left text-gray-300 font-semibold">Created At</th>
                        <th class="px-6 py-4 text-right text-gray-300 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700/50">
                    @foreach($categories as $category)
                    <tr class="hover:bg-gray-800/20 transition-colors duration-200">
                        <td class="px-6 py-4 text-gray-200 font-medium">{{ $category->name }}</td>
                        <td class="px-6 py-4 text-gray-400 max-w-xs">{{ Str::limit($category->description, 50) }}</td>
                        <td class="px-6 py-4 text-blue-400 font-mono">{{ $category->slug }}</td>
                        <td class="px-6 py-4 text-gray-400">{{ $category->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 text-right space-x-3">
                            <button @click="showCategoryModal = true; 
                                      editMode = true; 
                                      form = { 
                                          name: '{{ $category->name }}',
                                          slug: '{{ $category->slug }}',
                                          description: '{{ $category->description }}'
                                      };
                                      autoSlug = false"
                                    class="text-blue-400 hover:text-blue-300">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button @click="deleteConfirmation = true; currentCategory = {{ $category->id }}"
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
            {{ $categories->links() }}
        </div>

        <!-- Category Modal -->
        <div x-show="showCategoryModal" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
            <div @click.away="showCategoryModal = false" 
                 class="bg-gray-800 rounded-2xl w-full max-w-2xl p-8 relative">
                <h3 class="text-2xl font-bold mb-6" x-text="editMode ? 'Edit Category' : 'Create New Category'"></h3>
                
                <form x-bind:action="editMode ? '/admin/categories/' + currentCategory : '/admin/categories'" 
                      method="POST"
                      x-ref="categoryForm">
                    @csrf
                    @if(isset($category) && $editMode)
                        @method('PUT')
                    @endif
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Category Name</label>
                            <input type="text" name="name" x-model="form.name" @input="generateSlug" required
                                   class="w-full bg-gray-700/50 border border-gray-600 rounded-lg px-4 py-3 text-gray-100
                                          focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('name')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Slug</label>
                            <div class="flex items-center gap-3">
                                <input type="text" name="slug" x-model="form.slug" required
                                       class="w-full bg-gray-700/50 border border-gray-600 rounded-lg px-4 py-3 text-gray-100
                                             focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <label class="flex items-center space-x-2 text-sm text-gray-300">
                                    <input type="checkbox" x-model="autoSlug"
                                           class="form-checkbox h-4 w-4 text-blue-500 rounded border-gray-600">
                                    <span>Auto Generate</span>
                                </label>
                            </div>
                            @error('slug')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Description</label>
                            <textarea name="description" x-model="form.description" rows="3"
                                      class="w-full bg-gray-700/50 border border-gray-600 rounded-lg px-4 py-3 text-gray-100
                                             focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>

                        <div class="flex justify-end space-x-4 mt-8">
                            <button type="button" @click="showCategoryModal = false"
                                    class="px-6 py-2 text-gray-300 hover:text-gray-100 transition-colors">
                                Cancel
                            </button>
                            <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                                <span x-text="editMode ? 'Update Category' : 'Create Category'"></span>
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
                    <i class="fas fa-exclamation-triangle mr-2"></i>Delete Category
                </h3>
                <p class="text-gray-300 mb-6">Are you sure you want to delete this category? All related posts will be moved to uncategorized.</p>
                <div class="flex justify-center space-x-4">
                    <button @click="deleteConfirmation = false" 
                            class="px-6 py-2 text-gray-300 hover:text-gray-100">
                        Cancel
                    </button>
                    <form :action="'/admin/categories/' + currentCategory" method="POST">
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

        .font-mono {
            font-family: Monaco, Consolas, 'Liberation Mono', monospace;
        }
    </style>
    @endpush
</x-layouts.admin>