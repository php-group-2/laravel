<x-layout :links="$links" :siteName="$siteName">
    <div class="grid grid-cols-3 gap-2">
    @foreach($cards as $card)
        <x-card src="{{$card['src']}}" alt="{{$card['alt']}}" :title="$card['title']">
            {{ $card['content'] }}
        </x-card>
    @endforeach
    </div>
</x-layout>
