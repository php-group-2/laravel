<div class="navbar justify-around bg-gray-500  py-4 flex w-full">

    @foreach ($links as $link)
    <x-link :link="$link" />
    @endforeach

</div>
