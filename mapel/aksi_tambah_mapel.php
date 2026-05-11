<?php
include "../koneksi.php";
$id_mapel = $_POST["id_mapel"];

$nama_mapel = $_POST['nama_mapel'];

$sql = "INSERT INTO mapel (id_mapel, nama_mapel) VALUES ('$id_mapel', '$nama_mapel')";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: datamapel.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahmapel.php'>Kembali Ke Input Data";
}
?>