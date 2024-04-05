@extends("layouts.guest")

@section("content")
<div class="login-box">
    @include('components.error-message')
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>DSMLA</b> Login</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{ route('validate') }}" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" value="" name="email" placeholder="Email" required="">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div class="valid-feedback">Valid</div>
                    <div class="invalid-feedback">
                        Pleas fill this field.
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" id="password" required="">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="valid-feedback">Valid</div>
                    <div class="invalid-feedback">
                        Pleas fill this field.
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-2 d-flex">
                        <div class="icheck-primary">
                        <input type="checkbox" id="show-pass">
                        <label for="show-pass">
                            Show Password
                        </label>
                        </div>
                        <a href="{{ route('register') }}" class="ml-auto d-flex justify-content-center align-items-center"><b>Sign Up</b></a>
                    </div>
                    <div class="col-12 mb-2">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
