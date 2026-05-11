<?php
include "../koneksi.php";

$nis = $_GET['id'];
$sql = "DELETE FROM siswa WHERE nis = '$nis'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header('location:datasiswa.php');
} else {
    echo "Hapus siswa gagal";
}
?>