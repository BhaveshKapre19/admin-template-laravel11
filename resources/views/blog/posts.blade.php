<x-layouts.blog>
    <x-slot:title>Posts</x-slot:title>

    <!-- Main Content -->
    <main class="pt-20 pb-12 px-4 max-w-7xl mx-auto">
        <h1 class="text-4xl font-bold text-accent mb-8 text-center">All Blog Posts</h1>

        <!-- Grid Layout for Main Content and Side Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content (2 columns) -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Stacked Posts -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden w-[90%] mx-auto transform transition-all hover:scale-105 hover:shadow-xl">
                    <div class="flex h-48">
                        <!-- Image on the left -->
                        <img src="https://picsum.photos/400/250" alt="Post image" class="w-1/3 h-full object-cover rounded-l-lg" />
                        <!-- Content on the right -->
                        <div class="w-2/3 p-4 flex flex-col justify-between">
                            <div>
                                <span class="text-accent text-xs font-semibold">March 15, 2023</span>
                                <h2 class="text-xl font-bold mt-2 mb-2 text-gray-800 hover:text-accent transition">Getting Started with Web Development</h2>
                                <p class="text-sm text-gray-600">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                                </p>
                            </div>
                            <a href="/posts/1" class="mt-3 inline-block text-accent hover:text-primary transition text-sm font-semibold">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-lg shadow-lg overflow-hidden w-[90%] mx-auto transform transition-all hover:scale-105 hover:shadow-xl">
                    <div class="flex h-48">
                        <!-- Image on the left -->
                        <img src="https://picsum.photos/400/250" alt="Post image" class="w-1/3 h-full object-cover rounded-l-lg" />
                        <!-- Content on the right -->
                        <div class="w-2/3 p-4 flex flex-col justify-between">
                            <div>
                                <span class="text-accent text-xs font-semibold">March 20, 2023</span>
                                <h2 class="text-xl font-bold mt-2 mb-2 text-gray-800 hover:text-accent transition">Advanced CSS Techniques</h2>
                                <p class="text-sm text-gray-600">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                                </p>
                            </div>
                            <a href="/posts/2" class="mt-3 inline-block text-accent hover:text-primary transition text-sm font-semibold">Read More →</a>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-lg shadow-lg overflow-hidden w-[90%] mx-auto transform transition-all hover:scale-105 hover:shadow-xl">
                    <div class="flex h-48">
                        <!-- Image on the left -->
                        <img src="https://picsum.photos/400/250" alt="Post image" class="w-1/3 h-full object-cover rounded-l-lg" />
                        <!-- Content on the right -->
                        <div class="w-2/3 p-4 flex flex-col justify-between">
                            <div>
                                <span class="text-accent text-xs font-semibold">March 25, 2023</span>
                                <h2 class="text-xl font-bold mt-2 mb-2 text-gray-800 hover:text-accent transition">JavaScript Frameworks Comparison</h2>
                                <p class="text-sm text-gray-600">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                                </p>
                            </div>
                            <a href="/posts/3" class="mt-3 inline-block text-accent hover:text-primary transition text-sm font-semibold">Read More →</a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Sidebar (Fully Attached to the Right) -->
            <x-blog.sidebar></x-blog.sidebar>
            
        </div>
    </main>
</x-layouts.blog>