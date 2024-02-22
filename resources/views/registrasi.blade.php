<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Voting App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary px-4">
      <div class="container-fluid">
        <a class="navbar-brand text-white fs-2 fw-semibold" href="index.html">E-Voting</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav fw-semibold">
            <li class="nav-item me-3">
              <a class="nav-link text-white active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link text-white" href="quick-count.html">Quick Count</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link text-white" href="kandidat.html">Kandidat</a>
            </li>
            <li class="nav-item me-3 mb-2">
              <a href="login-pemilih.html" class="btn btn-outline-light rounded-pill">Login sebagai Pemilih</a>
            </li>
            <li class="nav-item mb-2">
              <a href="login-admin.html" class="btn btn-success rounded-pill">Login sebagai Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid pt-5 gx-5 pb-5">
      <div class="container pt-5">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12">
            <img src="img/user.png" class="img-fluid pb-3" alt="background" />
          </div>
          <div class="col-lg-5 col-md-12">
            <h2>Daftar</h2>
            <p class="fw-semibold">Silahkan Mendaftar agar bisa masuk ke sistem</p>
            <form class="pb-5">
              <div class="mb-3">
                <input type="text" class="form-control" id="exampleInputName" placeholder="Nama Lengkap" />
              </div>
              <div class="row mb-3">
                <div class="col-md-6 pe-2 pb-3 pb-md-0">
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" />
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Email" aria-label="Email" />
                </div>
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
              </div>
              <p class="fw-semibold text-body-secondary">Sudah mempunyai akun?<a href="login-pemilih.html" class="text-decoration-none text-primary"> Login</a></p>
              <button type="submit" class="btn btn-success px-3">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-primary" style="height: 23vh"></div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
