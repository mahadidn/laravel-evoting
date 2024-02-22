=<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>E-Voting App</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-primary d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <h2 class="text-center text-white">Sistem E-Voting</h2>
        <p class="text-center text-white">Pemilihan Pengurus HMTI UMRAH</p>
        <div class="card text-center">
          <div class="card-body">
            <img src="img/admin-login.png" class="img-fluid mx-auto rounded-circle" style="max-width: 150px;" alt="logo">
            <form class="pt-4">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img src="img/username.png" style="max-width: 15px;" alt="username-icon"></span>
                <input type="text" class="form-control" placeholder="Username atau Email" aria-label="Username or Email" aria-describedby="basic-addon1" />
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2"><img src="img/password.png" style="max-width: 15px;" alt="password-icon"></span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" />
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">Masuk</button>
                <a href="index.html" class="btn btn-danger">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
