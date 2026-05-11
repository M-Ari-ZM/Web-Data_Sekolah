<?php
include "../koneksi.php";
$id_mengajar = $_POST["id_mengajar"];
$nip = $_POST['nip'];
$id_kelas = $_POST['id_kelas'];
$id_prodi = $_POST['id_prodi'];
$id_mapel = $_POST['id_mapel'];

$sql = "INSERT INTO mengajar (id_mengajar, nip, id_kelas, id_prodi, id_mapel)
        VALUES ('$id_mengajar', '$nip', '$id_kelas', '$id_prodi', '$id_mapel')";

$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: datamengajar.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahmengajar.php'>Kembali Ke Input Data";
}
?>