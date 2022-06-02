<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="{{ $attributes['src'] }}" alt="{{ $attributes['alt'] }}">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $title }}</div>
        <p class="text-gray-700 text-base">
           {{ $slot }}
        </p>
    </div>
</div>
