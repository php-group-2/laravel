<div class="navbar">

    @foreach ($links as $link)
    <x-link :link="$link" />
    @endforeach

</div>