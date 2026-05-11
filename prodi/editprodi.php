<?php
include "../koneksi.php";

$id_prodi = $_GET['id'] ?? '';

$sql = "SELECT * FROM prodi WHERE id_prodi = '$id_prodi'";
$query = mysqli_query($db_link, $sql);

$data = mysqli_fetch_assoc($query);
$nama_prodi = $data['nama_prodi'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditProdi</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        EDIT DATA PRODI
    </h2>


    <form action="aksi_edit_prodi.php?id=<?php echo $data['id_prodi']; ?>" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_prodi" value="<?php echo $data['id_prodi']; ?>" disabled></td>
            </tr>
            <tr>
                <td>PRODI</td>
                <td>
                    <label style="cursor: pointer;"><input type="radio" name="nama_prodi" id="nama_prodi" value="TKJ"
                            <?php if ($nama_prodi == 'TKJ')
                                echo 'checked'; ?>>TKJ</label>
                    <label style="cursor: pointer;"><input type="radio" name="nama_prodi" id="nama_prodi" value="RPL"
                            <?php if ($nama_prodi == 'RPL')
                                echo 'checked'; ?>>RPL</label>
                    <label style="cursor: pointer;"><input type="radio" name="nama_prodi" id="nama_prodi" value="TE"
                            <?php if ($nama_prodi == 'TE')
                                echo 'checked'; ?>>TE</label>
                    <label style="cursor: pointer;"><input type="radio" name="nama_prodi" id="nama_prodi" value="AT"
                            <?php if ($nama_prodi == 'AT')
                                echo 'checked'; ?>>AT</label>
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