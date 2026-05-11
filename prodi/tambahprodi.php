<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TambahProdi</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        TAMBAH DATA PRODI
    </h2>

    <form action="aksi_tambah_prodi.php" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_prodi" id="id_prodi" required></td>
            </tr>
            <tr>
                <td>PRODI</td>
                <td>
                    <label style="cursor: pointer;"><input type="radio" name="nama_prodi" id="nama_prodi" value="TKJ"
                            checked>TKJ</label>
                    <label style="cursor: pointer;"><input type="radio" name="nama_prodi" id="nama_prodi"
                            value="RPL">RPL</label>
                    <label style="cursor: pointer;"><input type="radio" name="nama_prodi" id="nama_prodi"
                            value="TE">TE</label>
                    <label style="cursor: pointer;"><input type="radio" name="nama_prodi" id="nama_prodi"
                            value="AT">AT</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-top: 20px;">
                    <input type="submit" value="Simpan" class="btn-simpan">
                    <a href="dataprodi.php" class="btn-batal">Batal</a>
                </td>
            </tr>


        </table>
    </form>
</body>

</html>