<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Voting App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/apexcharts.js"></script>
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
        <h2 class="text-center">Quick Count</h2>
        <p class="text-center">Hasil Pemilihan Suara</p>
        <div class="row justify-content-center">
          <div class="col-6 col-sm-4 pb-3">
            <div class="card p-3 bg-body-secondary">
              <img src="img/kandidat.jpg" class="card-img-top img-fluid" alt="Kandidat 1" />
              <div class="card-body">
                <h5 class="card-title text-center">Kandidat 1</h5>
                <p class="card-text text-center">35 VOTE</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 pb-3">
            <div class="card p-3 bg-body-secondary">
              <img src="img/kandidat.jpg" class="card-img-top img-fluid" alt="Kandidat 2" />
              <div class="card-body">
                <h5 class="card-title text-center">Kandidat 2</h5>
                <p class="card-text text-center">20 VOTE</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 pb-3">
            <div class="card p-3 bg-body-secondary">
              <img src="img/kandidat.jpg" class="card-img-top img-fluid" alt="Kandidat 3" />
              <div class="card-body">
                <h5 class="card-title text-center">Kandidat 3</h5>
                <p class="card-text text-center">55 VOTE</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container py-5">
        <h2 class="text-center">Quick Count</h2>
        <p class="text-center">Grafik Hasil Pemilihan Suara</p>
        <div class="row justify-content-center">
          <div class="card col-md-8">
            <div class="card-body">
              <div id="chart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<script>
  var options = {
    series: [
      {
        data: [35,20,55],
      },
    ],
    chart: {
      height: 350,
      type: "bar",
      events: {
        click: function (chart, w, e) {
          // console.log(chart, w, e)
        },
      },
    },
    colors: ['#008FFB', '#00E396', '#FEB019'],
    plotOptions: {
      bar: {
        columnWidth: "50%",
        distributed: true,
        endingShape: "rounded"
      },
    },
    dataLabels: {
      enabled: false,
    },
    legend: {
      show: false,
    },
    xaxis: {
      categories: ["Kandidat1", "Kandidat 2", "Kandidat 3"],
      labels: {
        style: {
          colors: ['#008FFB', '#00E396', '#FEB019'],
          fontSize: "12px",
        },
      },
    },
    yaxis: {
      title: {
        text: "Jumlah Pemilih",
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>
