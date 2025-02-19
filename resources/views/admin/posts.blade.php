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
                    <input type="text" placeholder="Search posts..."
                        class="w-full pl-10 pr-4 py-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-100 placeholder-gray-400 transition duration-300">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <select
                    class="bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                    <option value="">All Categories</option>
                    <option>Technology</option>
                    <option>Business</option>
                    <option>Design</option>
                </select>
                <select
                    class="bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                    <option value="">All Statuses</option>
                    <option>Published</option>
                    <option>Draft</option>
                    <option>Archived</option>
                </select>
            </div>
        </div>

        <!-- Posts Table -->
        <div class="bg-gray-800 rounded-lg shadow-lg">
            <table class="table w-fit">
                <thead class="bg-gray-750">
                    <tr>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Post</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Author</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Status</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Published</th>
                        <th class="py-4 px-6 text-left text-gray-300 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @php
                        $posts = [
                            [
                                'id' => 1,
                                'title' => 'Introduction to Web Development',
                                'author' => 'John Doe',
                                'status' => 'Published',
                                'date' => '2024-03-15 14:30',
                                'views' => '2.5k',
                                'thumbnail' => 'https://picsum.photos/100'
                            ],
                            [
                                'id' => 2,
                                'title' => 'UI Design Principles',
                                'author' => 'Jane Smith',
                                'status' => 'Draft',
                                'date' => '2024-03-14 09:15',
                                'views' => '0',
                                'thumbnail' => 'https://picsum.photos/101'
                            ],
                            [
                                'id' => 3,
                                'title' => 'Business Strategy 2024',
                                'author' => 'Robert Brown',
                                'status' => 'Archived',
                                'date' => '2024-03-10 16:45',
                                'views' => '5.1k',
                                'thumbnail' => 'https://picsum.photos/102'
                            ],
                        ];
                    @endphp

                    @foreach ($posts as $post)
                                    <tr class="hover:bg-gray-750 transition duration-200">
                                        <td class="py-4 px-6">
                                            <div class="flex items-center">
                                                <img src="{{ $post['thumbnail'] }}" alt="Thumbnail"
                                                    class="w-16 h-10 rounded-md object-cover mr-4 border border-gray-600">
                                                <div class="text-gray-100 font-medium text-sm max-w-xs truncate">{{ $post['title'] }}</div>
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
                                                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                                        x-transition:enter-start="opacity-0 scale-95"
                                                        x-transition:enter-end="opacity-100 scale-100"
                                                        x-transition:leave="transition ease-in duration-75"
                                                        x-transition:leave-start="opacity-100 scale-100"
                                                        x-transition:leave-end="opacity-0 scale-95" @click.outside="open = false"
                                                        class="absolute right-0 z-50 mt-2 w-40 bg-gray-800 rounded-lg shadow-xl border border-gray-700">
                                                        <div class="p-2 space-y-1">
                                                            <a href="#"
                                                                class="flex items-center px-3 py-2 text-sm hover:bg-gray-700 rounded-md">
                                                                <i class="fas fa-chart-line mr-2 text-blue-400"></i> Analytics
                                                            </a>
                                                            <a href="#"
                                                                class="flex items-center px-3 py-2 text-sm hover:bg-gray-700 rounded-md">
                                                                <i class="fas fa-comments mr-2 text-green-400"></i> Comments
                                                            </a>
                                                            <a href="#"
                                                                class="flex items-center px-3 py-2 text-sm hover:bg-gray-700 rounded-md text-red-400">
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
</x-layouts.admin>