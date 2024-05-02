@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<div class='d-flex align-items-center justify-content-center vh-100 w-100'>

    <div class='d-flex flex-wrap align-items-center justify-content-center w-100' style='min-width: 375px; max-width:900px'>
        <!-- left -->

        <x-logo width='300px' height='250px' />

        <!-- Right -->

        <div>
            <x-error class="alert alert-danger " />
            <div class='container-fluid rounded shadow d-flex flex-column ' style='width:375px'>
                <form method='post' action='{{route("login")}}' class='d-flex flex-column gap-3 align-items-center justify-content-center p-3'>
                    @csrf
                    @method('post')
                    <h1>Sign In</h1>
                    <div class='w-100'>
                        <div class='form-floating mb-3'>
                            <input name='email' type='email' class='form-control' id='floatingInput' placeholder='name@example.com'>
                            <label for='floatingInput'>Email address</label>
                        </div>
                        <div class='form-floating'>
                            <input name='password' type='password' class='form-control' id='floatingPassword' placeholder='Password' autocomplete='off'>
                            <label for='floatingPassword'>Password</label>
                        </div>
                    </div>
                    <button type='submit' class='btn btn-primary w-50'>Login</button>
                    <!-- modal -->
                </form>
                <div class="mb-3 text-center"> @include('auth.register')</div>

            </div>
            <p class='text-center mt-3'>For funn only guys</p>
        </div>
    </div>

</div>


@endsection