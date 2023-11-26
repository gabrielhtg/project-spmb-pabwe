@extends('template.adminTemplate')

@section('isi-auth')
    <div id="tampilan_admin_mobile" class="d-flex d-sm-none w-100 vh-100 justify-content-center flex-column align-items-center">
        <h1 class="fw-semibold">SMPB IT DEL LOGIN</h1>

        <form class="p-4 p-md-5 rounded-3 w-100">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="input_username_mobile" name="input_username">
                <label for="input_username_mobile">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="input_password_mobile" name="input_password">
                <label for="input_password_mobile">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me" name="input_remember"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        </form>
    </div>

    <main id="tampilan_admin_desktop" class="d-none w-100 vh-100 d-sm-flex align-items-center justify-content-center">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
            <h1 class="fw-semibold text-center mb-5">SMPB IT DEL LOGIN</h1>

            <div class="form-floating mb-3">
                <input type="email" class="form-control w-100" id="input_username_dekstop" name="input_username">
                <label for="input_username_dekstop">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control w-100" id="input_password_desktop" name="input_password">
                <label for="input_password_desktop">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me" name="input_remember"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">LOGIN</button>
        </form>
    </main>
@endsection
