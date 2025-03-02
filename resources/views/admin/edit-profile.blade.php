<x-layouts.admin>
    <x-slot:title>Edit Profile</x-slot:title>
    <div class="space-y-6">
        <!-- Header Section -->
        <div class="pb-4 border-b border-gray-700">
            <h3 class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                Edit Profile
            </h3>
            <p class="mt-2 text-gray-400 font-light">Update your account information and preferences</p>
        </div>

        <!-- Edit Profile Card -->
        <div class="bg-gray-900 p-8 rounded-2xl shadow-2xl border border-gray-700 max-w-3xl mx-auto">
            <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Avatar Section -->
                <div class="text-center group relative mb-8">
                    <div class="relative inline-block">
                        <img src="https://picsum.photos/200" alt="Avatar" class="w-32 h-32 rounded-full border-4 border-gray-700 shadow-xl
                                    transition-transform duration-300 hover:scale-105 cursor-pointer"
                            id="avatarPreview">
                        <input type="file" id="avatarInput" name="avatar" class="hidden" accept="image/*">
                        <label for="avatarInput" class="absolute bottom-0 right-2 bg-blue-600 p-2 rounded-full hover:bg-blue-700 transition-all
                                    shadow-md hover:shadow-lg border-2 border-blue-800 cursor-pointer">
                            <i class="fas fa-camera text-white text-sm"></i>
                        </label>
                    </div>
                </div>

                <!-- Form Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Personal Information -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Full Name</label>
                            <input type="text"
                                class="w-full bg-gray-800 p-3 rounded-lg border border-gray-700 text-gray-200 
                                       focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all placeholder-gray-500"
                                value="Bhavesh Kapre" name="name" placeholder="Enter your full name" required>
                        </div>

                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Email Address</label>
                            <input type="email"
                                class="w-full bg-gray-800 p-3 rounded-lg border border-gray-700 text-gray-200 
                                       focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all placeholder-gray-500"
                                value="bhavesh.kapre@example.com" name="email" placeholder="Enter your email" required>
                        </div>

                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Job Title</label>
                            <input type="text"
                                class="w-full bg-gray-800 p-3 rounded-lg border border-gray-700 text-gray-200 
                                       focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all placeholder-gray-500"
                                value="Software Developer" name="job_title" placeholder="Enter your job title">
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Phone Number</label>
                            <input type="tel"
                                class="w-full bg-gray-800 p-3 rounded-lg border border-gray-700 text-gray-200 
                                       focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all placeholder-gray-500"
                                value="+1 (555) 123-4567" name="phone" placeholder="Enter your phone number">
                        </div>

                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Location</label>
                            <input type="text"
                                class="w-full bg-gray-800 p-3 rounded-lg border border-gray-700 text-gray-200 
                                       focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all placeholder-gray-500"
                                value="New York, USA" name="location" placeholder="Enter your location">
                        </div>

                        <div>
                            <label class="block text-sm text-gray-400 mb-2">Website</label>
                            <input type="url"
                                class="w-full bg-gray-800 p-3 rounded-lg border border-gray-700 text-gray-200 
                                       focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all placeholder-gray-500"
                                value="https://bhaveshkapre.com" name="website" placeholder="Enter your website URL">
                        </div>
                    </div>
                </div>

                <!-- Bio Section -->
                <div class="mt-6">
                    <label class="block text-sm text-gray-400 mb-2">Bio</label>
                    <textarea
                        class="w-full bg-gray-800 p-3 rounded-lg border border-gray-700 text-gray-200 
                               focus:outline-none resize-none h-32 focus:ring-2 focus:ring-blue-500 transition-all placeholder-gray-500"
                        name="bio"
                        placeholder="Tell us about yourself...">Passionate software developer with 5+ years of experience in building web applications. Specializing in modern JavaScript frameworks and cloud technologies.</textarea>
                </div>

                <!-- Social Links -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-gray-400 mb-2 flex items-center space-x-2">
                            <i class="fab fa-github text-gray-400"></i>
                            <span>GitHub Profile</span>
                        </label>
                        <input type="url"
                            class="w-full bg-gray-800 p-3 rounded-lg border border-gray-700 text-gray-200 
                                   focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all placeholder-gray-500"
                            value="https://github.com/bhaveshkapre" name="github"
                            placeholder="Enter your GitHub profile URL">
                    </div>

                    <div>
                        <label class="block text-sm text-gray-400 mb-2 flex items-center space-x-2">
                            <i class="fab fa-linkedin text-blue-400"></i>
                            <span>LinkedIn Profile</span>
                        </label>
                        <input type="url"
                            class="w-full bg-gray-800 p-3 rounded-lg border border-gray-700 text-gray-200 
                                   focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all placeholder-gray-500"
                            value="https://linkedin.com/in/bhaveshkapre" name="linkedin"
                            placeholder="Enter your LinkedIn profile URL">
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex flex-col sm:flex-row justify-end gap-3 sm:gap-4 flex-wrap">
                    <!-- Cancel Button -->
                    <a href="#" class="px-8 py-3 rounded-lg border border-gray-700 bg-gray-800 text-gray-300 hover:text-white hover:border-blue-500 hover:bg-gray-700/50
               transition-all duration-200 text-center font-medium flex items-center justify-center space-x-2
               focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900
               text-lg hover:shadow-lg hover:-translate-y-1 transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        <span>Cancel</span>
                    </a>

                    <!-- Save Changes Button -->
                    <button type="submit" class="px-8 py-3 rounded-lg bg-gradient-to-r from-blue-500 to-purple-500 text-white font-medium 
               hover:from-blue-600 hover:to-purple-600 hover:shadow-xl
               transition-all duration-200 transform hover:-translate-y-1
               focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-900
               active:scale-95 relative overflow-hidden group text-lg">

                        <!-- Overlay for hover effect -->
                        <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-20 transition-opacity">
                        </div>

                        <!-- Ripple Effect Container -->
                        <div class="absolute inset-0 overflow-hidden">
                            <div class="ripple absolute bg-white/30 rounded-full scale-0 opacity-50 animate-ripple">
                            </div>
                        </div>

                        <!-- Icon and Text -->
                        <div class="relative flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Save Changes</span>
                        </div>
                    </button>

                    <style>
                        /* Ripple Animation */
                        @keyframes ripple {
                            to {
                                transform: scale(4);
                                opacity: 0;
                            }
                        }

                        .animate-ripple {
                            animation: ripple 600ms linear;
                        }
                    </style>

                    <script>
                        // Ripple Effect Script
                        document.querySelector('button[type="submit"]').addEventListener('click', function (e) {
                            const button = e.currentTarget;
                            const ripple = button.querySelector('.ripple');

                            // Get the click position relative to the button
                            const rect = button.getBoundingClientRect();
                            const size = Math.max(rect.width, rect.height);
                            const x = e.clientX - rect.left - size / 2;
                            const y = e.clientY - rect.top - size / 2;

                            // Position and animate the ripple
                            ripple.style.left = `${x}px`;
                            ripple.style.top = `${y}px`;
                            ripple.style.width = `${size}px`;
                            ripple.style.height = `${size}px`;
                            ripple.classList.add('animate-ripple');

                            // Clean up after animation
                            ripple.addEventListener('animationend', () => {
                                ripple.classList.remove('animate-ripple');
                            });
                        });
                    </script>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Avatar Preview Script
        document.getElementById('avatarInput').addEventListener('change', function (e) {
            const reader = new FileReader();
            reader.onload = function () {
                document.getElementById('avatarPreview').src = reader.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>
</x-layouts.admin>