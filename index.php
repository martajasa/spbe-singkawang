<?php
require_once "config/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan-SPBE</title>
    <link href='img/skw2.png' rel='shortcut icon'>

    <!-- All CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="lib/style.css">
</head>

<body>
    <?php $page = @$_GET['page']; ?>
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="index.php">Beranda</a>
            <a class="nav-link" href="?page=b_tentang">Tentang Kami</a>
            <a class="nav-link" href="?page=b_artikel">Artikel</a>
            <a class="nav-link" href="?page=b_berita">Berita</a>
            <a class="nav-link" href="?page=b_materi">Materi</a>
            <a class="nav-link" href="?page=b_bukti_dukung">Bukti Dukung</a>
            <a class="nav-link" href="?page=b_login">LOGIN</a>
        </nav>
        <hr />
        <div class="tab-content" id="myTabContent">
            <?php if ($page == '' || $page == 'b_index') { ?>
                <div class="tab-pane fade show active">
                    <?php include "views/beranda/index.php"; ?>
                </div>
            <?php } elseif ($page == 'b_artikel') { ?>
                <div class="tab-pane fade show active">
                    <?php include "views/beranda/artikel.php"; ?>
                </div>
            <?php } elseif ($page == 'b_berita') { ?>
                <div class="tab-pane fade show active">
                    <?php include "views/beranda/berita.php"; ?>
                </div>
            <?php } elseif ($page == 'b_materi') { ?>
                <div class="tab-pane fade show active">
                    <?php include "views/beranda/materi.php"; ?>
                </div>
            <?php } elseif ($page == 'b_bukti_dukung') { ?>
                <div class="tab-pane fade show active">
                    <?php include "views/beranda/bukti_dukung.php"; ?>
                </div>
            <?php } elseif ($page == 'b_login') { ?>
                <div class="tab-pane fade show active">
                    <?php include "views/beranda/login.php"; ?>
                </div>
            <?php } elseif ($page == 'b_tentang') { ?>
                <div class="tab-pane fade show active">
                    <?php include "views/beranda/tentang_kami.php"; ?>
                </div>
            <?php } elseif ($page == 'b_hasilcari') { ?>
                <div class="tab-pane fade show active">
                    <?php include "views/beranda/hasil_cari.php"; ?>
                </div>
            <?php } elseif ($page == 'b_detailkonten') { ?>
                <div class="tab-pane fade show active">
                    <?php include "views/beranda/detail_konten.php"; ?>
                </div>
            <?php } else { ?>
                <div class="tab-pane fade show active">
                    <?php include "views/error.php"; ?>
                </div>
            <?php } ?>
        </div><!-- tab-content -->
    </div><!-- container -->
</body>

</html>