<?php
include "../koneksi.php";
$nis = $_POST["nis"];
$nama = $_POST["nama_siswa"];
$alamat = $_POST["alamat_siswa"];
$jk = $_POST["jk_siswa"];

$sql = "INSERT INTO siswa (nis, nama_siswa, alamat_siswa, jk_siswa) VALUES ('$nis', '$nama', '$alamat', '$jk')";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: datasiswa.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahsiswa.php'>Kembali Ke Input Data";
}
?>