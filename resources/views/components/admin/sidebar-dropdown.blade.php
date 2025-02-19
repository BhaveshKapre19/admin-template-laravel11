@props(['title', 'icon' => null])

<div x-data="{ open: false }">
    <!-- Dropdown Button -->
    <button @click="open = !open"
        class="flex justify-between w-full p-2 text-left text-gray-300 hover:bg-gray-700 rounded-lg transition items-center">
        <div class="flex items-center">
            @if($icon)
                <i class="{{ $icon }} text-gray-300 px-1"></i>
            @endif
            <span>{{ $title }}</span>
        </div>
        <span x-show="!open">▼</span>
        <span x-show="open">▲</span>
    </button>

    <!-- Dropdown Links -->
    <div x-show="open" x-collapse class="mt-2 space-y-1 pl-4">
        {{ $slot }}
    </div>
</div>
