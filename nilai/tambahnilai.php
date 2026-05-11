<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TambahNilai</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">

    <script>
        function hitungNA() {
            let uh = parseFloat(document.getElementById('uh').value) || 0;
            let uts = parseFloat(document.getElementById('uts').value) || 0;
            let uas = parseFloat(document.getElementById('uas').value) || 0;
            let na = (uh + uts + uas) / 3;
            document.getElementById('na').value = na.toFixed(2);
        }
    </script>
</head>

<body>
    <h2>
        TAMBAH DATA NILAI
    </h2>



    <form action="aksi_tambah_nilai.php" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>ID</td>
                <td colspan="5"><input type="text" name="id_nilai" id="id_nilai" required></td>
            </tr>

            <tr>
                <td></td>
                <!-- Guru -->
                <td>GURU</td>

                <!-- Kelas -->
                <td>KELAS</td>

                <!-- Prodi -->
                <td>PRODI</td>

                <!-- Mapel -->
                <td>MAPEL</td>

                <!-- Siswa -->
                <td>SISWA</td>
            </tr>
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
                    <select name="id_mapel">
                        <?php
                        $mapel = mysqli_query($db_link, "SELECT * FROM mapel");
                        while ($m = mysqli_fetch_assoc($mapel)) {
                            echo "<option value='{$m['id_mapel']}'>{$m['nama_mapel']}</option>";
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="nis">
                        <?php
                        $siswa = mysqli_query($db_link, "SELECT * FROM siswa");
                        while ($s = mysqli_fetch_assoc($siswa)) {
                            echo "<option value='{$s['nis']}'>{$s['nama_siswa']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>UH</td>
                <td colspan="5"><input type="number" name="uh" id="uh" oninput="hitungNA()" required></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td colspan="5"><input type="number" name="uts" id="uts" oninput="hitungNA()" required></td>
            </tr>
            <tr>
                <td>UAS</td>
                <td colspan="5"><input type="number" name="uas" id="uas" oninput="hitungNA()" required></td>
            </tr>
            <tr>
                <td>NA</td>
                <td colspan="5"><input type="number" name="na" id="na" disabled></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="5" style="padding-top: 20px;">
                    <input type="submit" value="Simpan" class="btn-simpan">
                    <a href="datanilai.php" class="btn-batal">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>