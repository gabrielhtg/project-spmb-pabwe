@extends('template.authTemplate')

@section('isi-auth')
    <div id="tampilan_admin_mobile"
         class="d-flex d-sm-none w-100 vh-100 justify-content-center flex-column align-items-center">

        <h1 class="fw-semibold">SPMB IT DEL LOGIN</h1>

        @if(Session::get('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif

        <form class="p-4 p-md-5 rounded-3 w-100" action="{{ route('post.login') }}" method="post" >
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="input_username_mobile" name="input_username">
                <label for="input_username_mobile">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="input_password_mobile" name="input_password">
                <label for="input_password_mobile">Password</label>
            </div>
{{--            <div class="checkbox mb-3">--}}
{{--                <label>--}}
{{--                    <input type="checkbox" value="remember-me" name="input_remember"> Remember me--}}
{{--                </label>--}}
{{--            </div>--}}
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        </form>
    </div>

    <main id="tampilan_admin_desktop" class="d-none w-100 vh-100 d-sm-flex align-items-center justify-content-center">
        <form class="p-4 p-md-5 rounded-3 shadow-lg" action="{{ route('post.login') }}" method="post">
            @csrf

            <h2 class="fw-semibold text-center mb-5">SPMB IT DEL LOGIN</h2>

            @if(Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif

            <div class="form-floating mb-3">
                <input type="text" class="form-control w-100" id="input_username_dekstop" name="input_username">
                <label for="input_username_dekstop">Username</label>
                @error('input_email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control w-100" id="input_password_desktop" name="input_password">
                <label for="input_password_desktop">Password</label>
                @error('input_password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
{{--            <div class="checkbox mb-3">--}}
{{--                <label>--}}
{{--                    <input type="checkbox" value="remember-me" name="input_remember"> Remember me--}}
{{--                </label>--}}
{{--            </div>--}}
            <button class="w-100 btn btn-lg btn-primary" type="submit">LOGIN</button>
        </form>
    </main>
@endsection
