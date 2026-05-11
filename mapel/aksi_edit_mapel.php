<?php
include "../koneksi.php";
$id_mapel = $_GET["id"];

$nama_mapel = $_POST['nama_mapel'];

$sql = "UPDATE mapel SET id_mapel = '$id_mapel', nama_mapel = '$nama_mapel' WHERE id_mapel = '$id_mapel'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: datamapel.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahmapel.php'>Kembali Ke Input Data";
}
?>