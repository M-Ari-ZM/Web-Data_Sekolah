<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditNilai</title>
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
        EDIT DATA NILAI
    </h2>

    <?php
    $id_nilai = $_GET['id'];
    $sql = "SELECT * FROM nilai WHERE id_nilai = '$id_nilai'";
    $query = mysqli_query($db_link, $sql);
    $data = mysqli_fetch_array($query);
    ?>



    <form action="aksi_edit_nilai.php?id=<?php echo $data['id_nilai'] ?>" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>ID</td>
                <td colspan="5">
                    <input type="text" name="id_nilai" id="id_nilai" value="<?php echo $data['id_nilai'] ?>" disabled>
                </td>
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
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <!-- Guru -->
                    <select name="nip">
                        <?php
                        $guru = mysqli_query($db_link, "SELECT * FROM guru");
                        while ($g = mysqli_fetch_assoc($guru)) {
                            $selected = ($g['nip'] == $data['nip']) ? 'selected' : '';
                            echo "<option value='{$g['nip']}' $selected>{$g['nama_guru']}</option>";
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
                            $selected = ($k['id_kelas'] == $data['id_kelas']) ? 'selected' : '';
                            echo "<option value='{$k['id_kelas']}' $selected>{$k['nama_kelas']}</option>";
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
                            $selected = ($p['id_prodi'] == $data['id_prodi']) ? 'selected' : '';
                            echo "<option value='{$p['id_prodi']}' $selected>{$p['nama_prodi']}</option>";
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
                            $selected = ($m['id_mapel'] == $data['id_mapel']) ? 'selected' : '';
                            echo "<option value='{$m['id_mapel']}' $selected>{$m['nama_mapel']}</option>";
                        }
                        ?>
                    </select>
                </td>

                <td>
                    <!-- Siswa -->
                    <select name="nis">
                        <?php
                        $siswa = mysqli_query($db_link, "SELECT * FROM siswa");
                        while ($s = mysqli_fetch_assoc($siswa)) {
                            $selected = ($s['nis'] == $data['nis']) ? 'selected' : '';
                            echo "<option value='{$s['nis']}' $selected>{$s['nama_siswa']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>UH</td>
                <td colspan="5"><input type="number" name="uh" id="uh" value="<?php echo $data['uh'] ?>"
                        oninput="hitungNA()" required></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td colspan="5"><input type="number" name="uts" id="uts" value="<?php echo $data['uts'] ?>"
                        oninput="hitungNA()" required>
                </td>
            </tr>
            <tr>
                <td>UAS</td>
                <td colspan="5"><input type="number" name="uas" id="uas" value="<?php echo $data['uas'] ?>"
                        oninput="hitungNA()" required>
                </td>
            </tr>
            <tr>
                <td>NA</td>
                <td colspan="5"><input type="number" name="na" id="na" value="<?php echo round($data["na"], 2) ?>"
                        disabled></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="5">
                    <input type="submit" value="Simpan" class="btn-simpan">
                    <a href="datanilai.php" class="btn-batal">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>