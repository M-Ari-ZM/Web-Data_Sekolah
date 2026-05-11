<?php
include "../koneksi.php";

$id_mapel = $_GET['id'] ?? '';

$sql = "SELECT * FROM mapel WHERE id_mapel = '$id_mapel'";
$query = mysqli_query($db_link, $sql);

$data = mysqli_fetch_assoc($query);

$nama_mapel = $data['nama_mapel'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditMapel</title>
    <link rel="stylesheet" href="../styles/style-tambah.css
    ">
</head>

<body>
    <h2>
        EDIT DATA MAPEL
    </h2>


    <form action="aksi_edit_mapel.php?id=<?php echo $data['id_mapel']; ?>" method="POST">
        <table border="0" cellspacing="0" class="form-table">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_mapel" value="<?php echo $data['id_mapel']; ?>" disabled></td>
            </tr>
            <tr>
                <td>MAPEL</td>
                <td>
                    <select name="nama_mapel">
                        <option value="Sejarah" <?php if ($nama_mapel == 'Sejarah')
                            echo 'selected'; ?>>Sejarah</option>
                        <option value="KK RPL Basis Data" <?php if ($nama_mapel == 'KK RPL Basis Data')
                            echo 'selected'; ?>>KK RPL Basis Data
                        </option>
                        <option value="KK RPL Android" <?php if ($nama_mapel == 'KK RPL Android')
                            echo 'selected'; ?>>KK RPL Android</option>
                        <option value="PAI" <?php if ($nama_mapel == 'PAI')
                            echo 'selected'; ?>>PAI</option>
                        <option value="Bahasa Inggris" <?php if ($nama_mapel == 'Bahasa Inggris')
                            echo 'selected'; ?>>Bahasa Inggris
                        </option>
                        <option value="KK RPL Web" <?php if ($nama_mapel == 'KK RPL Web')
                            echo 'selected'; ?>>KK RPL Web
                        </option>
                        <option value="KIK" <?php if ($nama_mapel == 'KIK')
                            echo 'selected'; ?>>KIK</option>
                        <option value="Matematika" <?php if ($nama_mapel == 'Matematika')
                            echo 'selected'; ?>>Matematika
                        </option>
                        <option value="MP RPL Desain Grafis" <?php if ($nama_mapel == 'MP RPL Desain Grafis')
                            echo 'selected'; ?>>MP RPL Desain Grafis</option>
                        <option value="Basa Sunda" <?php if ($nama_mapel == 'Basa Sunda')
                            echo 'selected'; ?>>Basa Sunda
                        </option>
                        <option value="PPKn" <?php if ($nama_mapel == 'PPKn')
                            echo 'selected'; ?>>PPKn</option>
                        <option value="PJOK" <?php if ($nama_mapel == 'PJOK')
                            echo 'selected'; ?>>PJOK</option>
                        <option value="Bahasa Indonesia" <?php if ($nama_mapel == 'Bahasa Indonesia')
                            echo 'selected'; ?>>Bahasa Indonesia</option>
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