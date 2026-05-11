<?php
include "../koneksi.php";
$nip = $_GET["id"];

$nama = $_POST["nama_guru"];
$alamat = $_POST["alamat_guru"];
$jk = $_POST["jk_guru"];

$sql = "UPDATE guru SET nip = '$nip', nama_guru = '$nama', alamat_guru = '$alamat', jk_guru = '$jk' WHERE nip = '$nip'";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: dataguru.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahguru.php'>Kembali Ke Input Data";
}
?>