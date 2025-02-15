<x-layouts.blog>

  <x-slot:title>Home</x-slot:title>

  <!-- Hero Section -->
  <x-blog.hero></x-blog.hero>

  <!-- Main Content -->
  <main class="pt-20 pb-12 px-4 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Blog Posts -->
      <article class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="https://picsum.photos/400/300" alt="Post image" class="w-full h-48 object-cover" />
        <div class="p-6">
          <span class="text-accent text-sm">March 15, 2023</span>
          <h2 class="text-xl font-bold mt-2 mb-3">
            Getting Started with Web Development
          </h2>
          <p class="text-primary">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
            eiusmod tempor incididunt ut labore...
          </p>
          <a href="#" class="mt-4 inline-block text-accent hover:text-primary transition">Read More →</a>
        </div>
      </article>

      <!-- Repeat similar article blocks for more posts -->
    </div>
  </main>
  
</x-layouts.blog>