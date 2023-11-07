<h1>Halaman Detail Konten</h1>
<hr />
<?php
if (isset($_GET['id'])) {
    $id    = $_GET['id'];
} else {
    die("Error. No ID Selected!");
}
require_once 'config/config.php';
require_once 'config/function.php';

$sql = "SELECT * FROM konten WHERE id=$id";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
?>
<h4 class="text-success"><?php echo $data['judul'] ?></h4>
<small class="text-muted">Kategori: <?php echo (namaKategori($data['id_kat'])); ?></small>
<p><?php echo $data['informasi'] ?></p>