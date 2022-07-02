<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--    Custom-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Register</title>
</head>
<body>

<div class="container">
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block mt-3">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="my-5 bg-red100">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 p-5">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-12 p-3">
                        <img src="{{ asset('assets/files/logo-pmi.png') }}" alt="PMI Logo" class="img-fluid">
                    </div>
                </div>
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-12">
                        <h6 class="text-light">
                            REGISTRASI
                        </h6>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 col-sm-12">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group text-left text-left">
                                <label class="text-light">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group text-left">
                                <label class="text-light">Alamat</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="form-group text-left">
                                <label for="blood_type" class="text-light ">Golongan Darah</label>
                                <select class="form-control" id="blood_type" name="blood_type" required>
                                    <option></option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="form-group text-left">
                                <label class="text-light">No Hp</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group text-left">
                                <label class="text-light">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group text-left">
                                <label class="text-light">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="p-5">
                                <p class="text-light">Anda Sudah Punya Akun?
                                    <a href="{{ route('login') }}" class="text-light">
                                        <b>Login</b>
                                    </a>
                                </p>
                                <button type="submit" class="btn btn-danger">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
