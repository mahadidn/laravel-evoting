@extends('layouts.main')

@section('container')

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

    <div class="container-fluid pt-5 gx-5 pb-5">
        <div class="container pt-5">
            <div class="row justify-content-center pb-5">
                <div class="col-lg-7 col-md-12">
                    <img src="img/user.png" class="img-fluid pb-3" alt="background" />
                </div>
                <div class="col-lg-5 col-md-12">
                    <h2>Login Pemilih</h2>
                    <p class="">Silahkan Login sebelum melakukan Voting</p>
                    <form class="pb-5">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputUsername"
                                placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                        </div>mahadidwinugraha@gmail.com
                        <p class="text-muted">Belum mempunyai akun? <a href="/register" class="text-decoration-none text-primary font-weight-bold ">Daftar</a></p>
                        <a href="vote.php" class="btn btn-success px-3">Masuk</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-basecolor" style="height: 23vh"></div>

@include('includes.user.scripts')
@endsection