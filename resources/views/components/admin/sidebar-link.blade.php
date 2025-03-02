@props(['route' => null, 'icon' => null])

<li class="group relative">
    <a href="{{ $route ? route($route) : '#' }}" 
       class="flex items-center p-2.5 space-x-2 rounded-lg transition-all duration-200
              {{ $route && request()->routeIs($route) 
                ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 text-white border-l-4 border-blue-400' 
                : 'text-gray-300 hover:bg-gray-700/50 hover:text-white hover:border-l-4 hover:border-blue-400/50' }}">
        @if($icon)
            <i class="{{ $icon }} text-gray-400 group-hover:text-blue-400 
                      {{ $route && request()->routeIs($route) ? 'text-blue-400' : '' }}"></i>
        @endif
        <span class="flex-1">{{ $slot }}</span>
    </a>
</li>