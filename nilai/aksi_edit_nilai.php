<?php
include "../koneksi.php";
$id_nilai = $_GET["id"];

$nip = $_POST['nip'];
$id_kelas = $_POST['id_kelas'];
$id_prodi = $_POST['id_prodi'];
$id_mapel = $_POST['id_mapel'];
$nis = $_POST['nis'];
$uh = $_POST['uh'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$na = ($uh + $uts + $uas) / 3;

$sql = "UPDATE nilai SET id_nilai = '$id_nilai', nip = '$nip', id_kelas = '$id_kelas', id_prodi = '$id_prodi', id_mapel = '$id_mapel', nis = '$nis', uh = '$uh', uts = '$uts', uas = '$uas', na = '$na' WHERE id_nilai = '$id_nilai'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: datanilai.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahnilai.php'>Kembali Ke Input Data";
}
?>