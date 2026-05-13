<?php
include "../koneksi.php";

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = mysqli_real_escape_string($db_link, $_POST['username']);
    $password = mysqli_real_escape_string($db_link, $_POST['password']);

    $query_siswa = mysqli_query($db_link, "SELECT * FROM siswa WHERE nama_siswa='$username' AND nis='$password'");

    $query_guru = mysqli_query($db_link, "SELECT * FROM guru WHERE nama_guru='$username' AND nip='$password'");

    $cek_log = mysqli_query($db_link, "SELECT * FROM login WHERE password='$password'");

    if (mysqli_num_rows($query_siswa) > 0) {
        $_SESSION['name'] = $username;
        $_SESSION['role'] = 'Siswa';

        if (mysqli_num_rows($cek_log) == 0) {
            mysqli_query($db_link, "INSERT INTO login (username, password) VALUES ('$username', '$password')");
        } else {
            mysqli_query($db_link, "UPDATE login SET username='$username' WHERE password='$password'");
        }

        header("location: ../dashboard_siswa.php");

    } else if (mysqli_num_rows($query_guru) > 0) {
        $_SESSION['name'] = $username;
        $_SESSION['role'] = 'Guru';

        if (mysqli_num_rows($cek_log) == 0) {
            mysqli_query($db_link, "INSERT INTO login (username, password) VALUES ('$username', '$password')");
        } else {
            mysqli_query($db_link, "UPDATE login SET username='$username' WHERE password='$password'");
        }

        header("location: ../dashboard_guru.php");

    } else {
        $_SESSION['error'] = "Login Gagal! Username atau Password tidak terdaftar";
        header("location: ../index.php");
        exit;
    }

} else {
    header("location: ../index.php");
    exit;
}
?>