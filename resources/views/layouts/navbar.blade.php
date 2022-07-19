<ul class="navbar">
    @foreach ($navigations as $nav => $url)
        <li><a href="{{ $url }}">{{ $nav }}</a></li>
    @endforeach
</ul>
