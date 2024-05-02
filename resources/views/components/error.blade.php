@if(session('error'))
<div {{ $attributes->merge(['class' => 'alert alert-danger']) }}>
    {{ session('error') }}
</div>
@endif