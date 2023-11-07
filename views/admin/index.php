<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.118.2">
  <title>SPBE</title>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="lib/bootstrap/css/dashboard.css" rel="stylesheet">
</head>

<body>
  <?php $page = @$_GET['page']; ?>
  <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">SPBE Singkawang</a>

    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
          <svg class="bi">
            <use xlink:href="#search" />
          </svg>
        </button>
      </li>
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="bi">
            <use xlink:href="#list" />
          </svg>
        </button>
      </li>
    </ul>

    <div id="navbarSearch" class="navbar-search w-100 collapse">
      <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">SPBE Singkawang</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">
                  Dashboard
                </a>
              </li>
              <hr class="my-3">
              <li class="nav-item">
                <a class="nav-link" href="?page=berita">
                  Berita
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=artikel">
                  Artikel
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=materi">
                  Materi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=bukti_dukung">
                  Bukti Dukung
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="views/logout.php">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <div class="container">
            <div class="tab-content" id="myTabContent">
              <?php if ($page == '' || $page == 'dashboard') { ?>
                <div class="tab-pane fade show active">
                  <?php include "views/dashboard.php"; ?>
                </div>
              <?php } elseif ($page == 'artikel') { ?>
                <div class="tab-pane fade show active">
                  <?php include "views/artikel/index.php"; ?>
                </div>
              <?php } elseif ($page == 'berita') { ?>
                <div class="tab-pane fade show active">
                  <?php include "views/berita/index.php"; ?>
                </div>
              <?php } elseif ($page == 'materi') { ?>
                <div class="tab-pane fade show active">
                  <?php include "views/materi/index.php"; ?>
                </div>
              <?php } elseif ($page == 'bukti_dukung') { ?>
                <div class="tab-pane fade show active">
                  <?php include "views/bukti_dukung/index.php"; ?>
                </div>
              <?php } else { ?>
                <div class="tab-pane fade show active">
                  <?php include "views/error.php"; ?>
                </div>
              <?php } ?>
            </div><!-- tab-content -->
          </div><!-- container -->
      </main>
    </div>
  </div>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/bootstrap/css/dashboard.js"></script>
</body>

</html>