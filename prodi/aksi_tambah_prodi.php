<?php
include "../koneksi.php";
$id_prodi = $_POST["id_prodi"];
$nama_prodi = $_POST["nama_prodi"];

$sql = "INSERT INTO prodi (id_prodi, nama_prodi) VALUES ('$id_prodi', '$nama_prodi')";
$query = mysqli_query($db_link, $sql);

if ($query) {
    header("location: dataprodi.php");
} else {
    echo "Gagal Disimpan --> <a href = 'tambahprodi.php'>Kembali Ke Input Data";
}
?>