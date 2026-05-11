<?php
include "../koneksi.php";

$id_nilai = $_GET['id'];
$sql = "DELETE FROM nilai WHERE id_nilai = '$id_nilai'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header('location:datanilai.php');
} else {
    echo "Hapus nilai gagal";
}
?>