<?php
include "../koneksi.php";
$id_kelas = $_POST["id_kelas"];

$tingkat = $_POST['tingkat'];
$jurusan = $_POST['jurusan'];
$nomor = $_POST['nomor'];
$nama_kelas = "$tingkat $jurusan $nomor";

$sql = "INSERT INTO kelas (id_kelas, nama_kelas) VALUES ('$id_kelas', '$nama_kelas')";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: datakelas.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahkelas.php'>Kembali Ke Input Data";
}
?>