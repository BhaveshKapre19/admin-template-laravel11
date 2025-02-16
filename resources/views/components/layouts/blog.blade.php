<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        My Blog -{{isset($title) ? $title : "Home"}}
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* Loader Animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loader {
            border-top-color: #3498db;
            /* Change this to match your accent color */
            border-bottom-color: #3498db;
            animation: spin 1.5s linear infinite;
        }
    </style>

</head>

<body class="bg-background text-primary">

    <!-- Loader -->
    <div id="loader"
        class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500">
        <div class="loader animate-spin rounded-full h-24 w-24 border-t-4 border-b-4 border-accent relative">
            <!-- Optional: Add a logo or text inside the loader -->
            <div class="absolute inset-0 flex items-center justify-center">
                <span class="text-accent font-bold text-lg">Loading...</span>
            </div>
        </div>
    </div>


    {{-- Navigation --}}
    <x-blog.navbar></x-blog.navbar>

    {{-- Alerts --}}
    @if (session('success'))
        <x-alert type="success" :message="session('success')" />
    @endif

    @if (session('error'))
        <x-alert type="error" :message="session('error')" />
    @endif

    @if (session('warning'))
        <x-alert type="warning" :message="session('warning')" />
    @endif

    @if (session('info'))
        <x-alert type="info" :message="session('info')" />
    @endif

    {{$slot}}

    <!-- Footer -->
    <x-blog.footer></x-blog.footer>

    <!-- JavaScript to handle the loader -->
    <script>
        // Simulate a 3-second loading delay
        setTimeout(() => {
            const loader = document.getElementById('loader');
            const content = document.getElementById('content');

            // Fade out the loader
            loader.style.opacity = '0';
            content.style.opacity = '1';

            // Remove the loader from the DOM after the transition
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500); // Match the duration of the transition
        }, 3000); // 3-second delay
    </script>
</body>

</html>