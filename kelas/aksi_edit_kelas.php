<?php
include "../koneksi.php";
$id_kelas = $_GET["id"];

$tingkat = $_POST['tingkat'];
$jurusan = $_POST['jurusan'];
$nomor = $_POST['nomor'];
$nama_kelas = "$tingkat $jurusan $nomor";

$sql = "UPDATE kelas SET id_kelas = '$id_kelas', nama_kelas = '$nama_kelas' WHERE id_kelas = '$id_kelas'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: datakelas.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahkelas.php'>Kembali Ke Input Data";
}
?>