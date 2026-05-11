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
    <title>DataKelas</title>
    <link rel="stylesheet" href="../styles/style-data.css">
</head>

<body>
    <h2>
        DATA KELAS
    </h2>

    <?php if ($_SESSION['role'] == 'Guru'): ?>
        <input type="button" value="Tambah Data" class="btn-tambah" onclick="location.href='tambahkelas.php'">

    <?php endif; ?>

    <br>
    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>KELAS</th>
                <?php if ($_SESSION['role'] == 'Guru'): ?>
                    <th style="text-align: center;">AKSI</th>
                <?php endif; ?>
            </tr>

            <?php
            $no = 1;
            $sql = "SELECT * FROM kelas";
            $query = mysqli_query($db_link, $sql);
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td>
                        <?php echo $data["id_kelas"] ?>
                    </td>
                    <td>
                        <?php echo $data["nama_kelas"] ?>
                    </td>
                    <?php if ($_SESSION['role'] == 'Guru'): ?>
                        <td style="text-align: center;">
                            <a class="btn-edit" href="editkelas.php?id=<?php echo $data['id_kelas']; ?>">EDIT</a>
                            <a class="btn-hapus" href="hapuskelas.php?id=<?php echo $data['id_kelas']; ?>"
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