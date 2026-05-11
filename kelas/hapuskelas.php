<?php
include "../koneksi.php";

$id_kelas = $_GET['id'];
$sql = "DELETE FROM kelas WHERE id_kelas = '$id_kelas'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header('location:datakelas.php');
} else {
    echo "Hapus kelas gagal";
}
?>