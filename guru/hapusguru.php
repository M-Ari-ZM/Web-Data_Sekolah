<?php
include "../koneksi.php";

$nip = $_GET['id'];
$sql = "DELETE FROM guru WHERE nip = '$nip'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header('location:dataguru.php');
} else {
    echo "Hapus guru gagal";
}
?>