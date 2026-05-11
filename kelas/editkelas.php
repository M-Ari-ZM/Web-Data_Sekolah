<?php
include "../koneksi.php";

$id_kelas = $_GET['id'] ?? '';

$sql = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
$query = mysqli_query($db_link, $sql);

$data = mysqli_fetch_assoc($query);

$parts = explode(" ", $data['nama_kelas']);
$tingkat = $parts[0] ?? '';
$jurusan = $parts[1] ?? '';
$nomor = $parts[2] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditKelas</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        EDIT DATA KELAS
    </h2>


    <form action="aksi_edit_kelas.php?id=<?php echo $data['id_kelas']; ?>" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_kelas" value="<?php echo $data['id_kelas']; ?>" disabled></td>
            </tr>
            <tr>
                <td>KELAS</td>
                <td style="display: flex; flex-wrap: nowrap;">
                    <select name="tingkat">
                        <option value="10" <?php if ($tingkat == '10')
                            echo 'selected'; ?>>10</option>
                        <option value="11" <?php if ($tingkat == '11')
                            echo 'selected'; ?>>11</option>
                        <option value="12" <?php if ($tingkat == '12')
                            echo 'selected'; ?>>12</option>
                    </select>

                    <select name="jurusan">
                        <option value="TKJ" <?php if ($jurusan == 'TKJ')
                            echo 'selected'; ?>>TKJ</option>
                        <option value="RPL" <?php if ($jurusan == 'RPL')
                            echo 'selected'; ?>>RPL</option>
                        <option value="TE" <?php if ($jurusan == 'TE')
                            echo 'selected'; ?>>TE</option>
                        <option value="AT" <?php if ($jurusan == 'AT')
                            echo 'selected'; ?>>AT</option>
                    </select>

                    <select name="nomor">
                        <option value="1" <?php if ($nomor == '1')
                            echo 'selected'; ?>>1</option>
                        <option value="2" <?php if ($nomor == '2')
                            echo 'selected'; ?>>2</option>
                        <option value="3" <?php if ($nomor == '3')
                            echo 'selected'; ?>>3</option>
                        <option value="4" <?php if ($nomor == '4')
                            echo 'selected'; ?>>4</option>
                        <option value="5" <?php if ($nomor == '5')
                            echo 'selected'; ?>>5</option>
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