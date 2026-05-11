<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TambahKelas</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        TAMBAH DATA KELAS
    </h2>



    <form action="aksi_tambah_kelas.php" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_kelas" id="id_kelas" required></td>
            </tr>
            <tr>
                <td>KELAS</td>
                <td style="display: flex; flex-wrap: nowrap;">
                    <select name="tingkat">
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>

                    <select name="jurusan">
                        <option value="TKJ">TKJ</option>
                        <option value="RPL">RPL</option>
                        <option value="TE">TE</option>
                        <option value="AT">AT</option>
                    </select>

                    <select name="nomor">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td style="padding-top: 20px;">
                    <input type="submit" value="Simpan" class="btn-simpan">
                    <a href="datakelas.php" class="btn-batal">Batal</a>
                </td>
            </tr>


        </table>
    </form>
</body>

</html>