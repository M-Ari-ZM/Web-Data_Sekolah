<?php
include "../koneksi.php";

$id_prodi = $_GET['id'];
$sql = "DELETE FROM prodi WHERE id_prodi = '$id_prodi'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header('location:dataprodi.php');
} else {
    echo "Hapus prodi gagal";
}
?>