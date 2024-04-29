<nav>
    <x-nav-list 
    :items="
    ['Home'=>'main', 
    'About'=>'main', 
    'Services'=>'main', 
    'Contact' => 'main',
    ]" />
    <form action="{{route('logout')}}" method='post'>
        @csrf
        <button type="submit">logout</button>
    </form>
</nav>
