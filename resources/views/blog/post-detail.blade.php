<x-layouts.blog>
    <x-slot:title>Post Detail</x-slot:title>

    <!-- Main Content -->
    <main class="pt-20 pb-12 px-4 max-w-7xl mx-auto">
        <!-- Back Button -->
        <div class="mb-8">
            <a href="/posts" class="text-accent hover:text-primary transition flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Back to Posts
            </a>
        </div>

        <!-- Post Detail Section -->
        <article class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Post Image -->
            <img src="https://picsum.photos/800/400" alt="Post image" class="w-full h-64 object-cover" />

            <!-- Post Content -->
            <div class="p-6">
                <!-- Post Metadata -->
                <span class="text-accent text-sm font-semibold">March 15, 2023</span>
                <h1 class="text-3xl font-bold mt-2 mb-4 text-gray-800">Getting Started with Web Development</h1>

                <!-- Post Body -->
                <div class="prose max-w-none text-gray-700">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </article>

        <!-- Related Posts Section -->
        <section class="mt-12">
            <h2 class="text-2xl font-bold text-accent mb-6">Related Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Related Post 1 -->
                <article class="bg-white rounded-lg shadow-md overflow-hidden transform transition-all hover:scale-105 hover:shadow-xl">
                    <img src="https://picsum.photos/400/250" alt="Post image" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <span class="text-accent text-xs font-semibold">March 20, 2023</span>
                        <h2 class="text-lg font-bold mt-2 mb-2 text-gray-800 hover:text-accent transition">Advanced CSS Techniques</h2>
                        <p class="text-sm text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                        </p>
                        <a href="/posts/2" class="mt-3 inline-block text-accent hover:text-primary transition text-sm font-semibold">Read More →</a>
                    </div>
                </article>

                <!-- Related Post 2 -->
                <article class="bg-white rounded-lg shadow-md overflow-hidden transform transition-all hover:scale-105 hover:shadow-xl">
                    <img src="https://picsum.photos/400/250" alt="Post image" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <span class="text-accent text-xs font-semibold">March 25, 2023</span>
                        <h2 class="text-lg font-bold mt-2 mb-2 text-gray-800 hover:text-accent transition">JavaScript Frameworks Comparison</h2>
                        <p class="text-sm text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                        </p>
                        <a href="/posts/3" class="mt-3 inline-block text-accent hover:text-primary transition text-sm font-semibold">Read More →</a>
                    </div>
                </article>

                <!-- Related Post 3 -->
                <article class="bg-white rounded-lg shadow-md overflow-hidden transform transition-all hover:scale-105 hover:shadow-xl">
                    <img src="https://picsum.photos/400/250" alt="Post image" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <span class="text-accent text-xs font-semibold">March 30, 2023</span>
                        <h2 class="text-lg font-bold mt-2 mb-2 text-gray-800 hover:text-accent transition">Building Scalable APIs with Node.js</h2>
                        <p class="text-sm text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                        </p>
                        <a href="/posts/4" class="mt-3 inline-block text-accent hover:text-primary transition text-sm font-semibold">Read More →</a>
                    </div>
                </article>
            </div>
        </section>
    </main>
</x-layouts.blog>