@props(['title', 'icon' => null])

<div x-data="{ open: false }" class="relative">
    <button @click="open = !open"
        class="flex justify-between w-full p-2.5 text-left text-gray-300 hover:bg-gray-700/50 rounded-lg transition-all 
               duration-200 items-center group">
        <div class="flex items-center space-x-2">
            @if($icon)
                <i class="{{ $icon }} text-gray-400 group-hover:text-blue-400 transition-colors"></i>
            @endif
            <span class="group-hover:text-white transition-colors">{{ $title }}</span>
        </div>
        <i class="fas fa-chevron-down text-xs text-gray-400 transform transition-transform duration-200"
           :class="{ 'rotate-180': open }"></i>
    </button>

    <div x-show="open" x-collapse
         class="ml-4 pl-2 mt-2 space-y-2 border-l-2 border-gray-700/50 animate-slide-down">
        {{ $slot }}
    </div>
</div>