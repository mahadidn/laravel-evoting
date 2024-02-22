@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-5">
                <h2 class="text-center text-white">Sistem E-Voting</h2>
                <p class="text-center text-white">Pemilihan Pengurus HMTI UMRAH</p>
                <div class="card text-center">
                    <div class="card-body">
                        <img src="img/admin-login.png" class="img-fluid mx-auto rounded-circle"
                            style="max-width: 150px;" alt="logo">
                        <form class="pt-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><img src="img/username.png"
                                            style="max-width: 15px;" alt="username-icon"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1" />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><img src="img/password.png"
                                            style="max-width: 15px;" alt="password-icon"></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                                    aria-describedby="basic-addon2" />
                            </div>
                            <div class="d-grid gap-2">
                                <a href="beranda.php" class="btn btn-success">Masuk</a>
                                <a href="index.php" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.user.scripts')
@endsection