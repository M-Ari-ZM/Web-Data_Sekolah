<?php
include "../koneksi.php";

$id_mapel = $_GET['id'];
$sql = "DELETE FROM mapel WHERE id_mapel = '$id_mapel'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header('location:datamapel.php');
} else {
    echo "Hapus mapel gagal";
}
?>