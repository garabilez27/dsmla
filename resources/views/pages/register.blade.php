@extends("layouts.guest")

@section("content")
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>DSMLA</b> Register</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>
            <form action="" method="post" class='needs-validation' novalidate>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="" name="fname" placeholder="Fullname" required="">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <div class="valid-feedback">Valid</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="row mb-3">
                    <div class="col-8">
                        <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" value="" name="terms" value="agree">
                        <label for="agreeTerms">
                            I agree to the <a href="#">terms</a>
                        </label>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <a href="{{ route('login') }}" class="ml-auto"><b>Sign In</b></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
