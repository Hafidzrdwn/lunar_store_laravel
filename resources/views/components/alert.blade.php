@php
    $classes = [
        'error' => 'bg-red-100 border border-red-400 text-red-700',
        'success' => 'bg-green-100 border border-green-400 text-green-700',
        'info' => 'bg-blue-100 border border-blue-400 text-blue-700',
    ];
@endphp

@if (flash()->message)
    <div class="{{ $classes[flash()->class] ?? $classes['error'] }} px-4 py-3 rounded relative mt-4" role="alert">
        <span class="block sm:inline">{{ flash()->message }}</span>
    </div>
@endif
