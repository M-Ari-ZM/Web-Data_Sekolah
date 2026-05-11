<?php
include "../koneksi.php";

$id_mengajar = $_GET['id'];
$sql = "DELETE FROM mengajar WHERE id_mengajar = '$id_mengajar'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header('location:datamengajar.php');
} else {
    echo "Hapus mengajar gagal";
}
?>