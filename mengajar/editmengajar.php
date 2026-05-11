<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditMengajar</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        EDIT DATA MENGAJAR
    </h2>

    <?php
    $id_mengajar = $_GET['id'];
    $sql = "SELECT * FROM mengajar WHERE id_mengajar = '$id_mengajar'";
    $query = mysqli_query($db_link, $sql);
    $data = mysqli_fetch_array($query);
    ?>



    <form action="aksi_edit_mengajar.php?id=<?php echo $data['id_mengajar'] ?>" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>ID</td>
                <td colspan="4"><input type="text" name="id_mengajar" id="id_mengajar"
                        value="<?php echo $data['id_mengajar'] ?>" disabled>
                </td>
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
                    <select name="nip" id="nip">
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
                    <select name="id_kelas" id="id_kelas">
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
                    <select name="id_prodi" id="id_prodi">
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
                    <select name="id_mapel" id="id_mapel">
                        <?php
                        $mapel = mysqli_query($db_link, "SELECT * FROM mapel");
                        while ($m = mysqli_fetch_assoc($mapel)) {
                            $selected = ($m['id_mapel'] == $data['id_mapel']) ? 'selected' : '';
                            echo "<option value='{$m['id_mapel']}' $selected>{$m['nama_mapel']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">
                    <input type="submit" value="Simpan" class="btn-simpan">
                    <a href="datamengajar.php" class="btn-batal">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>