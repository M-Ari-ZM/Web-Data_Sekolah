<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditSiswa</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        EDIT DATA SISWA
    </h2>

    <?php
    $nis = $_GET['id'];
    $sql = "SELECT * FROM siswa WHERE nis = '$nis'";
    $query = mysqli_query($db_link, $sql);
    $data = mysqli_fetch_array($query);
    $jk = $data['jk_siswa'];
    ?>



    <form action="aksi_edit_siswa.php?id=<?php echo $data['nis'] ?>" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" id="nis" value="<?php echo $data['nis'] ?>" disabled></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama_siswa" id="nama_siswa" value="<?php echo $data['nama_siswa'] ?>"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat_siswa" id="alamat_siswa"
                        value="<?php echo $data['alamat_siswa'] ?>">
                </td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="text" name="jk_siswa" id="jk_siswa" value="<?php echo $data['jk_siswa'] ?>" disabled>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label style="cursor: pointer;"><input type="radio" name="jk_siswa" id="jk_siswa" value="Laki-Laki"
                            <?php if ($jk == 'Laki-Laki')
                                echo 'checked'; ?>>Laki-Laki</label>
                    <label style="cursor: pointer;"><input type="radio" name="jk_siswa" id="jk_siswa" value="Perempuan"
                            <?php if ($jk == 'Perempuan')
                                echo 'checked'; ?>>Perempuan</label>
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