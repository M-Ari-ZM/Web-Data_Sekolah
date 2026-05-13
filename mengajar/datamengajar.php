<?php
include "../koneksi.php";
session_start();

if (!isset($_SESSION['role'])) {
    header("location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataMengajar</title>
    <link rel="stylesheet" href="../styles/style-data.css">
</head>

<body>
    <h2>
        DATA MENGAJAR
    </h2>

    <?php if ($_SESSION['role'] == 'Guru' || 'Administrator'): ?>
        <input type="button" value="Tambah Data" class="btn-tambah" onclick="location.href='tambahmengajar.php'">

    <?php endif; ?>

    <br>
    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>GURU</th>
                <th>KELAS</th>
                <th>PRODI</th>
                <th>MAPEL</th>
                <?php if ($_SESSION['role'] == 'Guru' || 'Administrator'): ?>
                    <th style="text-align: center;">AKSI</th>
                <?php endif; ?>
            </tr>

            <?php
            $no = 1;
            $sql = "SELECT m.id_mengajar, g.nama_guru, k.nama_kelas, 
               p.nama_prodi, mp.nama_mapel
        FROM mengajar m
        JOIN guru g ON m.nip = g.nip
        JOIN kelas k ON m.id_kelas = k.id_kelas
        JOIN prodi p ON m.id_prodi = p.id_prodi
        JOIN mapel mp ON m.id_mapel = mp.id_mapel";
            $query = mysqli_query($db_link, $sql);
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td>
                        <?php echo $data["id_mengajar"] ?>
                    </td>
                    <td>
                        <?php echo $data["nama_guru"] ?>
                    </td>
                    <td>
                        <?php echo $data["nama_kelas"] ?>
                    </td>
                    <td>
                        <?php echo $data["nama_prodi"] ?>
                    </td>
                    <td>
                        <?php echo $data["nama_mapel"] ?>
                    </td>
                    <?php if ($_SESSION['role'] == 'Guru' || 'Administrator'): ?>
                        <td style="text-align: center;">
                            <a class="btn-edit" href="editmengajar.php?id=<?php echo $data['id_mengajar']; ?>">EDIT</a>
                            <a class="btn-hapus" href="hapusmengajar.php?id=<?php echo $data['id_mengajar']; ?>"
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