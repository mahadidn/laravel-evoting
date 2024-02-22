<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Voting App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body class="overflow-hidden">
    <nav class="navbar navbar-expand-lg bg-primary px-4">
      <div class="container-fluid">
        <a class="navbar-brand text-white fs-2 fw-semibold" href="#">E-Voting</a>
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

    <div class="container-fluid bg-primary d-flex flex-wrap pt-5 gx-5">
      <div class="col-md-7 px-3 text-white">
        <h1>Sistem Pemungutan Suara (E-Voting) Pemilihan Pengurusan HMTI UMRAH Online Berbasis Web</h1>
        <p>Selamat datang di Sistem Pemungutan Suara (E-Voting) online berbasis web Anda bisa mengakses dari mana saja dan kapan saja</p>
        <div class="">
          <a href="login-pemilih.html" class="btn btn-info text-white me-2">Vote Now</a>
          <a href="kandidat.html" class="btn btn-outline-light"> Candidate List</a>
        </div>
      </div>
      <div class="col-6 col-md-5 d-flex justify-content-end">
        <img src="img/voting-box.png" width="300px" class="img-fluid" alt="voting-box" />
      </div>
    </div>
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#0d6efd"
        fill-opacity="1"
        d="M0,256L26.7,245.3C53.3,235,107,213,160,176C213.3,139,267,85,320,80C373.3,75,427,117,480,112C533.3,107,587,53,640,58.7C693.3,64,747,128,800,133.3C853.3,139,907,85,960,85.3C1013.3,85,1067,139,1120,149.3C1173.3,160,1227,128,1280,96C1333.3,64,1387,32,1413,16L1440,0L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"
      ></path>
    </svg>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
