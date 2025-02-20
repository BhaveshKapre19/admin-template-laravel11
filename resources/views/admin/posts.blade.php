<x-layouts.admin>
    <x-slot:title>Posts Management</x-slot:title>
    <div>
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <div>
                <h3 class="text-2xl font-bold text-gray-100 mb-2">Posts Management</h3>
                <p class="text-gray-400">Manage and monitor all published content</p>
            </div>
            <a href="#"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg mt-4 md:mt-0 transition duration-300">
                <i class="fas fa-plus mr-2"></i>Create New Post
            </a>
        </div>

        <!-- Filters and Search -->
        <div class="bg-gray-800 p-4 rounded-lg shadow-lg mb-6">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1 relative">
                    <input type="text" id="postSearch" placeholder="Search posts..."
                        class="w-full pl-10 pr-4 py-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-100 placeholder-gray-400 transition duration-300">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <select id="postCategoryFilter"
                    class="bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                    <option value="">All Categories</option>
                    <option>Technology</option>
                    <option>Business</option>
                    <option>Design</option>
                </select>
                <select id="postStatusFilter"
                    class="bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                    <option value="">All Statuses</option>
                    <option>Published</option>
                    <option>Draft</option>
                    <option>Archived</option>
                </select>
            </div>
        </div>

        <!-- Posts Table -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-x-auto">
            <table class="w-full min-w-[800px]">
                <thead class="bg-gray-750">
                    <tr>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Post</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Author</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Status</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Published</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700" id="postTableBody">
                    @foreach ($posts as $post)
                                    <tr class="hover:bg-gray-750 transition duration-200"
                                        data-category="{{ strtolower($post['category']) }}">
                                        <td class="py-4 px-6">
                                            <div class="flex items-center">
                                                <img src="{{ $post['thumbnail'] }}" alt="Thumbnail"
                                                    class="w-16 h-10 rounded-md object-cover mr-4 border border-gray-600">
                                                <div class="text-gray-100 font-medium text-sm max-w-xs truncate">{{ $post['title'] }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center text-gray-300">
                                                <i class="fas fa-user mr-2 text-gray-400"></i>
                                                {{ $post['author'] }}
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-sm
                                                    {{ $post['status'] === 'Published' ? 'bg-green-600/20 text-green-400' :
                        ($post['status'] === 'Draft' ? 'bg-gray-600/20 text-gray-400' : 'bg-yellow-600/20 text-yellow-400') }}">
                                                <span class="w-2 h-2 rounded-full mr-2 
                                                        {{ $post['status'] === 'Published' ? 'bg-green-400' :
                        ($post['status'] === 'Draft' ? 'bg-gray-400' : 'bg-yellow-400') }}"></span>
                                                {{ $post['status'] }}
                                            </span>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex flex-col">
                                                <span
                                                    class="text-gray-100 text-sm">{{ date('M j, Y', strtotime($post['date'])) }}</span>
                                                <span class="text-xs text-gray-400">{{ date('g:i A', strtotime($post['date'])) }}</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center space-x-3 relative">
                                                <a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300"
                                                    data-tooltip="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="text-gray-400 hover:text-green-500 transition duration-300"
                                                    data-tooltip="View">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <div class="relative" x-data="{ open: false }">
                                                    <button @click.stop="open = !open"
                                                        class="text-gray-400 hover:text-gray-200 transition duration-300">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </button>
                                                    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-100"
                                                        x-transition:enter-start="opacity-0 scale-95"
                                                        x-transition:enter-end="opacity-100 scale-100"
                                                        x-transition:leave="transition ease-in duration-75"
                                                        x-transition:leave-start="opacity-100 scale-100"
                                                        x-transition:leave-end="opacity-0 scale-95" @click.outside="open = false"
                                                        class="absolute right-0 z-50 mt-2 w-40 bg-gray-800 rounded-lg shadow-xl border border-gray-700">
                                                        <div class="p-2 space-y-1">
                                                            <a href="#"
                                                                class="flex items-center px-3 py-2 text-sm hover:bg-gray-700/50 rounded-md text-white">
                                                                <i class="fas fa-chart-line mr-2 text-blue-400"></i> Analytics
                                                            </a>
                                                            <a href="#"
                                                                class="flex items-center px-3 py-2 text-sm hover:bg-gray-700/50 rounded-md text-white">
                                                                <i class="fas fa-comments mr-2 text-green-400"></i> Comments
                                                            </a>
                                                            <a href="#"
                                                                class="flex items-center px-3 py-2 text-sm hover:bg-gray-700/50 rounded-md text-red-400">
                                                                <i class="fas fa-trash mr-2"></i> Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-between items-center bg-gray-800 p-4 rounded-lg shadow-lg">
            <span class="text-gray-400">Showing 1 to 3 of 3 posts</span>
            <div class="flex space-x-2">
                <button
                    class="bg-gray-700 text-gray-300 px-3 py-1 rounded hover:bg-gray-600 transition duration-300">Previous</button>
                <button class="bg-blue-600 text-white px-3 py-1 rounded">1</button>
                <button
                    class="bg-gray-700 text-gray-300 px-3 py-1 rounded hover:bg-gray-600 transition duration-300">Next</button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                let searchInput = document.getElementById('postSearch');
                let categoryFilter = document.getElementById('postCategoryFilter');
                let statusFilter = document.getElementById('postStatusFilter');
                let tableRows = document.querySelectorAll('#postTableBody tr');

                function filterPosts() {
                    let searchValue = searchInput.value.toLowerCase();
                    let categoryValue = categoryFilter.value.toLowerCase();
                    let statusValue = statusFilter.value.toLowerCase();

                    tableRows.forEach(row => {
                        let postTitle = row.querySelector('td:first-child div.text-gray-100').textContent.toLowerCase();
                        let postAuthor = row.querySelector('td:nth-child(2) div').textContent.toLowerCase(); // Extract author name
                        let postCategory = row.getAttribute('data-category') ? row.getAttribute('data-category').toLowerCase() : '';
                        let postStatus = row.querySelector('td:nth-child(3) span').textContent.toLowerCase().trim();

                        let matchesSearch = postTitle.includes(searchValue) || postAuthor.includes(searchValue); // Now searches by title and author
                        let matchesCategory = categoryValue === "" || postCategory === categoryValue;
                        let matchesStatus = statusValue === "" || postStatus === statusValue;

                        if (matchesSearch && matchesCategory && matchesStatus) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }

                searchInput.addEventListener('input', filterPosts);
                categoryFilter.addEventListener('change', filterPosts);
                statusFilter.addEventListener('change', filterPosts);
            });
        </script>
    @endpush
</x-layouts.admin>