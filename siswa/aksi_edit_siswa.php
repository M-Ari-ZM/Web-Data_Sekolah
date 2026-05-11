<?php
include "../koneksi.php";
$nis = $_GET["id"];

$nama = $_POST["nama_siswa"];
$alamat = $_POST["alamat_siswa"];
$jk = $_POST["jk_siswa"];

$sql = "UPDATE siswa SET nis = '$nis', nama_siswa = '$nama', alamat_siswa = '$alamat', jk_siswa = '$jk' WHERE nis = '$nis'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: datasiswa.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahsiswa.php'>Kembali Ke Input Data";
}
?>