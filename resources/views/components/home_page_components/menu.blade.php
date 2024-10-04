<nav>
    <ul class = 'menu_list'>
        @foreach($content as $key => $value)
            <li><a class = 'menu_ref' href={{$value}}>{{ $key }}</a></li>
        @endforeach
    </ul>
</nav>
