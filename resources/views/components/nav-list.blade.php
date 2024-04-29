@props(['items' => []])

@foreach($items as $item => $route)
    <a href='{{ route($route) }}'>{{ $item }}</a>
@endforeach
