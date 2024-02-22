@extends('layouts.main')

@section('container')
    <div class="container-fluid pt-5 gx-5 pb-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12">
                    <img src="img/user.png" class="img-fluid pb-3" alt="background" />
                </div>
                <div class="col-lg-5 col-md-12">
                    <h2>Daftar</h2>
                    <p class="">Silahkan Mendaftar agar bisa masuk ke sistem</p>
                    <form class="pb-5" method="POST" action="/register">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nama Lengkap" name="name" required value="{{ old('name') }}"/>
                            @error('name')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-6 pe-2 pb-3 pb-md-0">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" aria-label="Username" name="username" required value="{{ old('username') }}"/>
                            @error('username')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email" name="email" required value="{{ old('email') }}"/>
                            @error('email')
                                <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password" name="password" required />
                            @error('password')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <p class=" text-muted">Sudah mempunyai akun? <a href="/login-pemilih" class="text-decoration-none text-primary font-weight-bold">Login</a></p>
                        <button class="btn btn-success px-3">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-basecolor" style="height: 23vh"></div>

@include('includes.user.scripts')
@endsection
