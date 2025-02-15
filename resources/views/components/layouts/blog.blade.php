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

</head>

<body class="bg-background text-primary">

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
</body>

</html>