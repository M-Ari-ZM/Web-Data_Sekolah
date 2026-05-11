<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TambahMengajar</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        TAMBAH DATA MENGAJAR
    </h2>



    <form action="aksi_tambah_mengajar.php" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>ID</td>
                <td colspan="4"><input type="text" name="id_mengajar" id="id_mengajar" required></td>
            </tr>

            <tr>
                <td></td>
                <td>GURU</td>
                <td>KELAS</td>
                <td>PRODI</td>
                <td>MAPEL</td>
            </tr>

            <!-- Guru -->
            <tr>
                <td></td>
                <td>
                    <select name="nip">
                        <?php
                        $guru = mysqli_query($db_link, "SELECT * FROM guru");
                        while ($g = mysqli_fetch_assoc($guru)) {
                            echo "<option value='{$g['nip']}'>{$g['nama_guru']}</option>";
                        }
                        ?>
                    </select>
                </td>

                <td>
                    <!-- Kelas -->
                    <select name="id_kelas">
                        <?php
                        $kelas = mysqli_query($db_link, "SELECT * FROM kelas");
                        while ($k = mysqli_fetch_assoc($kelas)) {
                            echo "<option value='{$k['id_kelas']}'>{$k['nama_kelas']}</option>";
                        }
                        ?>
                    </select>
                </td>

                <td>
                    <!-- Prodi -->
                    <select name="id_prodi">
                        <?php
                        $prodi = mysqli_query($db_link, "SELECT * FROM prodi");
                        while ($p = mysqli_fetch_assoc($prodi)) {
                            echo "<option value='{$p['id_prodi']}'>{$p['nama_prodi']}</option>";
                        }
                        ?>
                    </select>
                </td>

                <td>
                    <!-- Mapel -->
                    <select name="id_mapel">
                        <?php
                        $mapel = mysqli_query($db_link, "SELECT * FROM mapel");
                        while ($m = mysqli_fetch_assoc($mapel)) {
                            echo "<option value='{$m['id_mapel']}'>{$m['nama_mapel']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4" style="padding-top: 20px;">
                    <input type="submit" value="Simpan" class="btn-simpan">
                    <a href="datamengajar.php" class="btn-batal">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>