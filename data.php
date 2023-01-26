<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Wahyu</title>
</head>
<body>

        <h4> <a href = Tambah.php>Tambah </a></h4>
        <link rel="stylesheet" href="style1.css">
        <link rel="icon" type="icon/x-icon" href="gaje.jpg">
        <table border="1">
            <tr>
                <td>No.</td>
                <td>Nama Barang</td>
                <td>Kategori Barang</td>
                <td>Nama Karyawan</td>
                <td>Divisi</td>
                <td>Jabatan</td>
                <td>Aksi</td>
</tr>
<?php
include("koneksi.php");
$query = mysqli_query($db, "SELECT * FROM tb_barang INNER JOIN tb_karyawan ON tb_barang.id_karyawan =
  tb_karyawan.id_karyawan");
  $no = 1;
  foreach ($query as $row):
?>
<tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama_barang']; ?></td>
        <td><?= $row['kategori_barang']; ?></td>
        <td><?= $row['nama_karyawan']; ?></td>
        <td><?= $row['divisi']; ?></td>
        <td><?= $row['jabatan']; ?></td>
        <td><a href="edit.php?id_barang=<?= $row['id_barang']; ?>">Edit</a> ||
        <a href="hapus.php?id_barang=<?= $row['id_barang']; ?>">Hapus</a>
  </tr>

  <?php endforeach; ?>

  </table>
  <footer>
      <p>Wahyu Rizky Nurhidayat</p>
    </footer>

</body>
</html>