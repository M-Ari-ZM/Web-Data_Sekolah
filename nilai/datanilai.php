<?php
include "../koneksi.php";
session_start();

if (!isset($_SESSION['role'])) {
    header("location: ../login.php");
    exit;
}
?>

<?php
$no = 1;
$sql = "SELECT m.id_nilai, g.nama_guru, k.nama_kelas, p.nama_prodi, mp.nama_mapel, s.nama_siswa, uh, uts, uas, na
FROM nilai m
JOIN guru g ON m.nip = g.nip
JOIN kelas k ON m.id_kelas = k.id_kelas
JOIN prodi p ON m.id_prodi = p.id_prodi
JOIN mapel mp ON m.id_mapel = mp.id_mapel
JOIN siswa s ON m.nis = s.nis";
$query = mysqli_query($db_link, $sql);
$total = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataNilai</title>
    <link rel="stylesheet" href="../styles/style-data.css">
</head>

<body>
    <h2>
        DATA NILAI
    </h2>
    <?php if ($_SESSION['role'] == 'Guru'): ?>
        <input type="button" value="Tambah Data" class="btn-tambah" onclick="location.href='tambahnilai.php'">

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
                <th>SISWA</th>
                <td bgcolor="#e2e8f0" rowspan="<?php echo $total + 1; ?>" width="0.1px"></td>
                <th>UH</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>NA</th>
                <?php if ($_SESSION['role'] == 'Guru'): ?>
                    <td bgcolor="#e2e8f0" rowspan="<?php echo $total + 1; ?>" width="0.1px"></td>
                    <th style="text-align: center;">AKSI</th>
                <?php endif; ?>
            </tr>

            <?php
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td>
                        <?php echo $data["id_nilai"] ?>
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
                    <td>
                        <?php echo $data["nama_siswa"] ?>
                    </td>
                    <td>
                        <?php echo $data["uh"] ?>
                    </td>
                    <td>
                        <?php echo $data["uts"] ?>
                    </td>
                    <td>
                        <?php echo $data["uas"] ?>
                    </td>
                    <td>
                        <?php echo round($data["na"], 2) ?>
                    </td>
                    <?php if ($_SESSION['role'] == 'Guru'): ?>
                        <td style="text-align: center;">
                            <a class="btn-edit" href="editnilai.php?id=<?php echo $data['id_nilai']; ?>">EDIT</a>
                            <a class="btn-hapus" href="hapusnilai.php?id=<?php echo $data['id_nilai']; ?>"
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