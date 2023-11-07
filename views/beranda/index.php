<h1>Ini Halaman Depan</h1>
<hr />
<h3>Slider</h3>
<hr />
<h3>Pencarian</h3>
<div class="col-lg-12">
    <form action="?page=b_hasilcari" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Ketikkan kata kunci...">
            <select id="category" name="search_category" class="form-select form-control-lg" required="">
                <option selected="" value="" class="text-center">------- Pilih Kategori --------</option>
                <?php
                $sql = "SELECT * FROM kategori";
                $result = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                <?php
                }
                ?>
            </select>
            <div class="input-group-append">
                <!-- <button class="btn btn-warning btn-lg" type="button">Cari</button> -->
                <input type="submit" name="submit" class="btn btn-warning btn-lg" value="Cari">
            </div>
        </div>
    </form>
</div>
<hr />
<h4>Berita</h4>
<?php
$sql = "SELECT * FROM konten WHERE id_kat=2";
$result = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($result)) {
    $kalimat = $data['informasi'];
    $sub_kalimat = substr($kalimat, 0, 300);
?>
    <div class="card-body">
        <strong class="card-title"><?php echo $data['judul']; ?></strong>
        <p class="card-text"><?php echo $sub_kalimat; ?></p>
        <small><a href="?page=b_detailkonten&id=<?php echo $data['id'] ?>">Selengkapnya</a></small>
    </div>
<?php
}
?>
<hr />
<h4>Artikel</h4>
<?php
$sql = "SELECT * FROM konten WHERE id_kat=1";
$result = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($result)) {
    $kalimat = $data['informasi'];
    $sub_kalimat = substr($kalimat, 0, 300);
?>
    <div class="card-body">
        <strong class="card-title"><?php echo $data['judul']; ?></strong>
        <p class="card-text"><?php echo $sub_kalimat; ?></p>
        <small><a href="?page=b_detailkonten&id=<?php echo $data['id'] ?>">Selengkapnya</a></small>
    </div>
<?php
}
?>
<hr />
<h4>Footer</h4>