<x-layouts.blog>
    <x-slot:title>Posts</x-slot:title>

    <!-- Main Content -->
    <main class="pt-20 pb-12 px-4 max-w-7xl mx-auto">
        <h1 class="text-4xl font-bold text-accent mb-8">All Blog Posts</h1>

        <!-- Grid Layout for Main Content and Side Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content (2 columns) -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Stacked Posts -->
                <article class="bg-white rounded-lg shadow-md overflow-hidden w-[90%] mx-auto">
                    <img src="https://picsum.photos/400/250" alt="Post image" class="w-full h-36 object-cover" />
                    <div class="p-4">
                        <span class="text-accent text-xs">March 15, 2023</span>
                        <h2 class="text-lg font-bold mt-2 mb-2">Getting Started with Web Development</h2>
                        <p class="text-sm text-primary">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                        </p>
                        <a href="/posts/1" class="mt-3 inline-block text-accent hover:text-primary transition text-sm">Read More →</a>
                    </div>
                </article>

                <article class="bg-white rounded-lg shadow-md overflow-hidden w-[90%] mx-auto">
                    <img src="https://picsum.photos/400/250" alt="Post image" class="w-full h-36 object-cover" />
                    <div class="p-4">
                        <span class="text-accent text-xs">March 20, 2023</span>
                        <h2 class="text-lg font-bold mt-2 mb-2">Advanced CSS Techniques</h2>
                        <p class="text-sm text-primary">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                        </p>
                        <a href="/posts/2" class="mt-3 inline-block text-accent hover:text-primary transition text-sm">Read More →</a>
                    </div>
                </article>

                <article class="bg-white rounded-lg shadow-md overflow-hidden w-[90%] mx-auto">
                    <img src="https://picsum.photos/400/250" alt="Post image" class="w-full h-36 object-cover" />
                    <div class="p-4">
                        <span class="text-accent text-xs">March 25, 2023</span>
                        <h2 class="text-lg font-bold mt-2 mb-2">JavaScript Frameworks Comparison</h2>
                        <p class="text-sm text-primary">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                        </p>
                        <a href="/posts/3" class="mt-3 inline-block text-accent hover:text-primary transition text-sm">Read More →</a>
                    </div>
                </article>
            </div>

            <!-- Sidebar (Fully Attached to the Right) -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <!-- Search Box -->
                    <form class="mb-4 flex">
                        <input type="text" placeholder="Search..." class="flex-1 p-2 border border-primary rounded-l-lg focus:outline-none focus:ring-2 focus:ring-accent text-sm" />
                        <button type="submit" class="bg-accent text-white px-4 py-2 rounded-r-lg hover:bg-opacity-90 transition duration-300 text-sm">Search</button>
                    </form>

                    <h2 class="text-lg font-bold text-accent mb-3">Categories</h2>
                    <ul class="space-y-1 text-sm">
                        <li><a href="#" class="text-primary hover:text-accent transition">Web Development</a></li>
                        <li><a href="#" class="text-primary hover:text-accent transition">Design</a></li>
                        <li><a href="#" class="text-primary hover:text-accent transition">JavaScript</a></li>
                        <li><a href="#" class="text-primary hover:text-accent transition">CSS</a></li>
                        <li><a href="#" class="text-primary hover:text-accent transition">Tutorials</a></li>
                    </ul>

                    <h2 class="text-lg font-bold text-accent mt-6 mb-3">Popular Posts</h2>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="#" class="flex items-center space-x-3">
                                <img src="https://picsum.photos/40/40" alt="Post thumbnail" class="w-10 h-10 rounded-lg object-cover" />
                                <span class="text-primary hover:text-accent transition">Getting Started with Web Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3">
                                <img src="https://picsum.photos/40/40" alt="Post thumbnail" class="w-10 h-10 rounded-lg object-cover" />
                                <span class="text-primary hover:text-accent transition">Advanced CSS Techniques</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3">
                                <img src="https://picsum.photos/40/40" alt="Post thumbnail" class="w-10 h-10 rounded-lg object-cover" />
                                <span class="text-primary hover:text-accent transition">JavaScript Frameworks Comparison</span>
                            </a>
                        </li>
                    </ul>

                    <h2 class="text-lg font-bold text-accent mt-6 mb-3">Subscribe</h2>
                    <form class="space-y-3">
                        <input type="email" placeholder="Your email" class="w-full p-2 border border-primary rounded-lg focus:outline-none focus:ring-2 focus:ring-accent text-sm" />
                        <button type="submit" class="w-full bg-accent text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition duration-300 text-sm">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layouts.blog>
