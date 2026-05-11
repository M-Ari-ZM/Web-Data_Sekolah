<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TambahSiswa</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        TAMBAH DATA SISWA
    </h2>

    <form action="aksi_tambah_siswa.php" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" id="nis" required></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama_siswa" id="nama_siswa" required></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat_siswa" id="alamat_siswa" required></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <label style="cursor: pointer;"><input type="radio" name="jk_siswa" id="jk_siswa" value="Laki-Laki"
                            checked>Laki-Laki</label>
                    <label style="cursor: pointer;"><input type="radio" name="jk_siswa" id="jk_siswa"
                            value="Perempuan">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-top: 20px;">
                    <input type="submit" value="Simpan" class="btn-simpan">
                    <a href="datasiswa.php" class="btn-batal">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>