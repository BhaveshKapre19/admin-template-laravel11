@props(['type' => 'info', 'message', 'icon' => 'fa-info-circle'])

@php
    $colors = [
        'success' => 'bg-green-500/20 border-green-500/50',
        'error' => 'bg-red-500/20 border-red-500/50',
        'warning' => 'bg-yellow-500/20 border-yellow-500/50',
        'info' => 'bg-blue-500/20 border-blue-500/50'
    ];
    $icons = [
        'success' => 'fa-circle-check text-green-400',
        'error' => 'fa-circle-exclamation text-red-400',
        'warning' => 'fa-triangle-exclamation text-yellow-400',
        'info' => 'fa-circle-info text-blue-400'
    ];
@endphp

<div class="{{ $colors[$type] }} border-l-4 p-4 mb-4 rounded-lg flex items-start space-x-3 animate-fade-in">
    <i class="fas {{ $icons[$type] ?? $icon }} text-lg mt-0.5"></i>
    <div class="flex-1 text-gray-200">
        {{ $message }}
    </div>
    <button class="text-gray-400 hover:text-gray-200 transition-colors">
        <i class="fas fa-times"></i>
    </button>
</div>