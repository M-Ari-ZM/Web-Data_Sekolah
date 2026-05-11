<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditGuru</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        EDIT DATA GURU
    </h2>

    <?php
    $nip = $_GET['id'];
    $sql = "SELECT * FROM guru WHERE nip = '$nip'";
    $query = mysqli_query($db_link, $sql);
    $data = mysqli_fetch_array($query);
    $jk = $data['jk_guru'];
    ?>

    <form action="aksi_edit_guru.php?id=<?php echo $data['nip'] ?>" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>NIP</td>
                <td><input type="text" name="nip" id="nip" value="<?php echo $data['nip'] ?>" disabled></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama_guru" id="nama_guru" value="<?php echo $data['nama_guru'] ?>"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat_guru" id="alamat_guru" value="<?php echo $data['alamat_guru'] ?>">
                </td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="text" name="jk_guru" id="jk_guru" value="<?php echo $data['jk_guru'] ?>" disabled>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label style="cursor: pointer;"><input type="radio" name="jk_guru" id="jk_guru" value="Laki-Laki"
                            <?php if ($jk == 'Laki-Laki')
                                echo 'checked'; ?>>Laki-Laki</label>
                    <label style="cursor: pointer;"><input type="radio" name="jk_guru" id="jk_guru" value="Perempuan"
                            <?php if ($jk == 'Perempuan')
                                echo 'checked'; ?>>Perempuan</label>
                </td>
            </tr>

            <tr>
                <td></td>
                <td style="padding-top: 20px;">
                    <input type="submit" value="Simpan" class="btn-simpan">
                    <a href="dataguru.php" class="btn-batal">Batal</a>
                </td>
            </tr>


        </table>
    </form>
</body>

</html>