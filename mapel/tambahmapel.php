<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahmapel</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        TAMBAH DATA MAPEL
    </h2>



    <form action="aksi_tambah_mapel.php" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_mapel" id="id_mapel" required></td>
            </tr>
            <tr>
                <td>MAPEL</td>
                <td>
                    <select name="nama_mapel">
                        <option value="Sejarah">Sejarah</option>
                        <option value="KK RPL Basis Data">KK RPL Basis Data
                        </option>
                        <option value="KK RPL Android">KK RPL Android</option>
                        <option value="PAI">PAI</option>
                        <option value="Bahasa Inggris">Bahasa Inggris
                        </option>
                        <option value="KK RPL Web">KK RPL Web
                        </option>
                        <option value="KIK">KIK</option>
                        <option value="Matematika">Matematika
                        </option>
                        <option value="MP RPL Desain Grafis">MP RPL Desain Grafis</option>
                        <option value="Basa Sunda">Basa Sunda
                        </option>
                        <option value="PPKn">PPKn</option>
                        <option value="PJOK">PJOK</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td style="padding-top: 20px;">
                    <input type="submit" value="Simpan" class="btn-simpan">
                    <a href="datamapel.php" class="btn-batal">Batal</a>
                </td>
            </tr>


        </table>
    </form>
</body>

</html>