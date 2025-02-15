{{-- <!-- resources/views/components/alert.blade.php -->
@props(['type' => 'info', 'message' => ''])

@php
    $colors = [
        'success' => 'bg-green-100 border-green-400 text-green-700',
        'error' => 'bg-red-100 border-red-400 text-red-700',
        'warning' => 'bg-yellow-100 border-yellow-400 text-yellow-700',
        'info' => 'bg-blue-100 border-blue-400 text-blue-700',
    ];
    $color = $colors[$type] ?? $colors['info'];
@endphp

<div x-data="{ show: true }" x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" role="dialog" aria-modal="true">
    <div x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="bg-white rounded-lg shadow-xl w-11/12 md:w-1/2 lg:w-1/3 p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">{{ ucfirst($type) }}</h3>
            <button @click="show = false" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <p class="text-gray-700">{{ $message }}</p>
        <div class="mt-6">
            <button @click="show = false" class="px-4 py-2 bg-accent text-white rounded-lg hover:bg-opacity-90 transition duration-300">
                Close
            </button>
        </div>
    </div>
</div> --}}

@props(['type' => 'info', 'message' => ''])

@php
    $colors = [
        'success' => 'bg-green-100 border-green-400 text-green-700',
        'error' => 'bg-red-100 border-red-400 text-red-700',
        'warning' => 'bg-yellow-100 border-yellow-400 text-yellow-700',
        'info' => 'bg-blue-100 border-blue-400 text-blue-700',
    ];
    $color = $colors[$type] ?? $colors['info'];
@endphp

<div x-data="{ show: true }" x-show="show"
     x-init="setTimeout(() => show = false, 5000)" {{-- Auto-close after 5s --}}
     @click.away="show = false" {{-- Click outside to close --}}
     class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" role="dialog" aria-modal="true">
    
    <div x-show="show" x-transition:enter="transition ease-out duration-300" 
         x-transition:enter-start="opacity-0 scale-95" 
         x-transition:enter-end="opacity-100 scale-100" 
         x-transition:leave="transition ease-in duration-200" 
         x-transition:leave-start="opacity-100 scale-100" 
         x-transition:leave-end="opacity-0 scale-95"
         class="bg-white rounded-lg shadow-xl w-11/12 md:w-1/2 lg:w-1/3 p-6 border-l-4 {{ $color }}">
        
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">{{ ucfirst($type) }}</h3>
            <button @click="show = false" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <p class="text-gray-700">{{ $message }}</p>

        <div class="mt-6">
            <button @click="show = false" class="px-4 py-2 bg-accent text-white rounded-lg hover:bg-opacity-90 transition duration-300">
                Close
            </button>
        </div>
    </div>
</div>
