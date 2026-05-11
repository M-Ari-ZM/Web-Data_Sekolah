<?php
include "../koneksi.php";
session_start();

if (!isset($_SESSION['role'])) {
    header("location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataSiswa</title>
    <link rel="stylesheet" href="../styles/style-data.css">
</head>

<body>
    <h2>
        DATA SISWA
    </h2>
    <?php if ($_SESSION['role'] == 'Guru'): ?>
        <input type="button" value="Tambah Data" class="btn-tambah" onclick="location.href='tambahsiswa.php'">
    <?php endif; ?>

    <br>

    <div class="table-container">
        <table>
            <tr>
                <th>NIS</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <?php if ($_SESSION['role'] == 'Guru'): ?>
                    <th style="text-align: center;">AKSI</th>
                <?php endif; ?>
            </tr>

            <?php
            $no = 1;
            $sql = "SELECT * FROM siswa";
            $query = mysqli_query($db_link, $sql);
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td>
                        <?php echo $data["nis"] ?>
                    </td>
                    <td>
                        <?php echo $data["nama_siswa"] ?>
                    </td>
                    <td>
                        <?php echo $data["alamat_siswa"] ?>
                    </td>
                    <td>
                        <?php echo $data["jk_siswa"] ?>
                    </td>
                    <?php if ($_SESSION['role'] == 'Guru'): ?>
                        <td style="text-align: center;">
                            <a href="editsiswa.php?id=<?php echo $data['nis']; ?>" class="btn-edit">EDIT</a>
                            <a href="hapussiswa.php?id=<?php echo $data['nis']; ?>" onclick="return confirm('Anda yakin?')"
                                class="btn-hapus">HAPUS</a>
                        </td>
                    <?php endif; ?>
                </tr>
                <?php
                $no++;
            }
            ?>
        </table>
    </div>
</body>

</html>