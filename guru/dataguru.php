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
    <title>DataGuru</title>
    <link rel="stylesheet" href="../styles/style-data.css">
</head>

<body>
    <h2>
        DATA GURU
    </h2>

    <?php if ($_SESSION['role'] == 'Guru'): ?>
        <input type="button" value="Tambah Data" class="btn-tambah" onclick="location.href='tambahguru.php'">

    <?php endif; ?>

    <br>
    <div class="table-container">
        <table>
            <tr>
                <th>NIP</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <?php if ($_SESSION['role'] == 'Guru'): ?>
                    <th style="text-align: center;">AKSI</th>
                <?php endif; ?>
            </tr>

            <?php
            $no = 1;
            $sql = "SELECT * FROM guru";
            $query = mysqli_query($db_link, $sql);
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td>
                        <?php echo $data["nip"] ?>
                    </td>
                    <td>
                        <?php echo $data["nama_guru"] ?>
                    </td>
                    <td>
                        <?php echo $data["alamat_guru"] ?>
                    </td>
                    <td>
                        <?php echo $data["jk_guru"] ?>
                    </td>
                    <?php if ($_SESSION['role'] == 'Guru'): ?>
                        <td style="text-align: center;">
                            <a class="btn-edit" href="editguru.php?id=<?php echo $data['nip']; ?>">EDIT</a>
                            <a class="btn-hapus" href="hapusguru.php?id=<?php echo $data['nip']; ?>"
                                onclick="return confirm('Anda yakin?')">HAPUS</a>
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