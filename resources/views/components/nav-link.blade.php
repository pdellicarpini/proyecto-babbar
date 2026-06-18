<a 

    class="{{$linkClass}} {{ request()->routeIs($to) ? 'active' : '' }}"  
    {{ request()->routeIs($to) ? 'aria-current="page"' : '' }} 
    href="{{ route($to, $params ?? []) }}">

    {{ $slot }}

</a>