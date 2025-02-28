@props(['type' => 'info', 'message' => ''])

@php
    $alertClasses = [
        'success' => 'bg-green-100 text-green-800 border-green-500',
        'error' => 'bg-red-100 text-red-800 border-red-500',
        'warning' => 'bg-yellow-100 text-yellow-800 border-yellow-500',
        'info' => 'bg-blue-100 text-blue-800 border-blue-500',
    ];
    $iconClasses = [
        'success' => 'check-circle',
        'error' => 'x-circle',
        'warning' => 'exclamation-circle',
        'info' => 'information-circle',
    ];
@endphp

@if($message)
    <div x-data="{ show: true }" x-show="show" x-transition.duration.300ms 
         class="flex items-center justify-between p-4 mb-4 border rounded-lg {{ $alertClasses[$type] }}">
        <div class="flex items-center space-x-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="#{{ $iconClasses[$type] }}"></use>
            </svg>
            <span>{{ $message }}</span>
        </div>
        <button @click="show = false" class="text-xl font-bold">&times;</button>
    </div>
@endif
