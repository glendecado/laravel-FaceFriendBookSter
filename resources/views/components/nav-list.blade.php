@props(['items' => []])

@foreach($items as $item => $route)
    <a href='{{ $route }}'>{{ $item }}</a>
@endforeach
