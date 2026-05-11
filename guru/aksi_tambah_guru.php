<?php
include "../koneksi.php";
$nip = $_POST["nip"];
$nama = $_POST["nama_guru"];
$alamat = $_POST["alamat_guru"];
$jk = $_POST["jk_guru"];

$sql = "INSERT INTO guru (nip, nama_guru, alamat_guru, jk_guru) VALUES ('$nip', '$nama', '$alamat', '$jk')";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: dataguru.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahguru.php'>Kembali Ke Input Data";
}
?>