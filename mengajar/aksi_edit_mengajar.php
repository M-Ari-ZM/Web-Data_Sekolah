<?php
include "../koneksi.php";
$id_mengajar = $_GET["id"];

$nip = $_POST['nip'];
$id_kelas = $_POST['id_kelas'];
$id_prodi = $_POST['id_prodi'];
$id_mapel = $_POST['id_mapel'];

$sql = "UPDATE mengajar SET id_mengajar = '$id_mengajar', nip = '$nip', id_kelas = '$id_kelas', id_prodi = '$id_prodi', id_mapel = '$id_mapel' WHERE id_mengajar = '$id_mengajar'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: datamengajar.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahmengajar.php'>Kembali Ke Input Data";
}
?>