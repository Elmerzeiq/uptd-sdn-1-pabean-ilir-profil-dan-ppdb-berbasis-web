<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, admin, dashboard, template">

    <title>UPTD 1 PABEAN REGISTER</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo2/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <img src="{{ asset('upload/login.png') }}" style="height: 100%; width: 100%;">
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo logo-light d-block mb-2">
                                            UPTD 1 PABEAN ILIR<span><br>REGISTER</span>
                                        </a>
                                        <h5 class="text-muted fw-normal mb-4">Create a new account.</h5>
                                        <form class="forms-sample" method="post" action="{{ route('register') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Full Name</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Enter your name" value="{{ old('name') }}" required>
                                                <span style="color: red;">{{ $errors->first('name') }}</span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" name="email" class="form-control" id="email"
                                                    placeholder="Email" value="{{ old('email') }}" required>
                                                <span style="color: red;">{{ $errors->first('email') }}</span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input type="text" name="phone" class="form-control" id="phone"
                                                    placeholder="Phone number" value="{{ old('phone') }}" required>
                                                <span style="color: red;">{{ $errors->first('phone') }}</span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" placeholder="Password" required>
                                                <span style="color: red;">{{ $errors->first('password') }}</span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" placeholder="Confirm password" required>
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                                Register
                                            </button>
                                            <a href="{{ route('admin.login') }}" class="d-block mt-3 text-muted">
                                                Already have an account? Login
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('assets/vendors/core/core.js') }}"></script>
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
</body>

</html>
