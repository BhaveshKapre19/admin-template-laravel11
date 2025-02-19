@props(['route' => null, 'icon' => null])

<li class="rounded-md transition {{ $route && request()->routeIs($route) ? 'bg-gray-700 text-white border' : 'text-gray-300 hover:bg-gray-700' }}">
    <a href="{{ $route ? route($route) : '#' }}" class="flex items-center p-2 rounded-lg">
        @if($icon)
            <i class="{{ $icon }} text-gray-300 px-1"></i>
        @endif
        {{ $slot }}
    </a>
</li>
