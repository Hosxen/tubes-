<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Custom-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Login</title>
</head>

<body class="bg-red100">
<div class="container">
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block mt-3">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="row mb-5">
        <div class="col-md-7 col-sm-12 mt-5">
            <img class="img-fluid" src="{{ asset('assets/files/login-banner.png') }}" alt="Banner Login">
        </div>
        <div class="col-md-5 col-sm-12 mt-5 bg-red90 p-5">
            <div class="row">
                <div class="col-12 py-3">
                    <img src="{{ asset('assets/files/logo-pmi.png') }}" alt="PMI Logo" class="img-fluid">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 py-3">
                    <h6 class="text-light">LOGIN</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('login.process') }}" method="post">
                        @csrf
                        <div class="form-group text-left">
                            <label for="email" class="text-light">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ \Illuminate\Support\Facades\Cookie::get('email') }}">
                        </div>
                        <div class="form-group text-left">
                            <label for="password" class="text-light">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ \Illuminate\Support\Facades\Cookie::get('password') }}">
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="true" id="defaultCheck1" name="remember_me">
                                    <label class="form-check-label text-light" for="defaultCheck1">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <a href="{{ route('registration') }}">
                                    <button type="button" class="btn btn-link text-light">Register</button>
                                </a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
