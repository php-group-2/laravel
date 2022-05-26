@foreach ($links as $link)

@if ($name == $link)
<span>{{$name}}</span>
@continue
@endif

<a href="{{ route($link) }}">{{$link}}</a>

@endforeach