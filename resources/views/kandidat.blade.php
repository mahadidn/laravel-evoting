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

    <div class="container-fluid pt-5 gx-5">
      <div class="container">
          <div class="text-center">
            <h2>Profil Kandidat</h2>
            <p>Silahkan Melihat Profil Jagoan Anda! </p>
          </div>
            <table class="table table-bordered table-responsive text-center">
              <thead class="table-secondary">
                <tr>
                  <th>No.</th>
                  <th>Foto Kandidat</th>
                  <th>Profil Lengkap</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><img src="img/kandidat.jpg" class="img-fluid" alt="Kandidat 1"></td>
                  <td class="text-start">John Doe adalah sosok yang berkomitmen tinggi untuk mewujudkan perubahan positif dalam lingkungan kampus. Dengan latar belakang akademis yang kuat dan pengalaman kepemimpinan yang luas, John Doe telah terlibat aktif dalam berbagai kegiatan kemahasiswaan yang melibatkan pengembangan potensi mahasiswa. Selain itu, sebagai sosok yang aktif di kegiatan ekstrakurikuler, John Doe telah memimpin berbagai proyek dalam lingkungan kampus.</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><img src="img/kandidat.jpg" class="img-fluid" alt="Kandidat 2"></td>
                  <td class="text-start">John Doe adalah sosok yang berkomitmen tinggi untuk mewujudkan perubahan positif dalam lingkungan kampus. Dengan latar belakang akademis yang kuat dan pengalaman kepemimpinan yang luas, John Doe telah terlibat aktif dalam berbagai kegiatan kemahasiswaan yang melibatkan pengembangan potensi mahasiswa. Selain itu, sebagai sosok yang aktif di kegiatan ekstrakurikuler, John Doe telah memimpin berbagai proyek dalam lingkungan kampus.</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><img src="img/kandidat.jpg" class="img-fluid" alt="Kandidat 3"></td>
                  <td class="text-start">John Doe adalah sosok yang berkomitmen tinggi untuk mewujudkan perubahan positif dalam lingkungan kampus. Dengan latar belakang akademis yang kuat dan pengalaman kepemimpinan yang luas, John Doe telah terlibat aktif dalam berbagai kegiatan kemahasiswaan yang melibatkan pengembangan potensi mahasiswa. Selain itu, sebagai sosok yang aktif di kegiatan ekstrakurikuler, John Doe telah memimpin berbagai proyek dalam lingkungan kampus.</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
