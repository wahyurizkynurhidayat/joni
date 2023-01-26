<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input Data Siswa</title>
</head>
<body>
    <center>
    <link rel="stylesheet" href="style1.css">
<link rel="icon" type="icon/x-icon" href="gaje.jpg">
    <table border = "0" >
    <form action="proses-edit.php" method="POST">
        <tr><h2>Update Data Siswa</h2></tr>
        <tr>
        <td><label for="nama_barang">Nama Barang :</label></td>
        <td><input type="text" name="nama_barang" /></td>
        </tr>
        <tr>
        <td><label for="kategori_barang">Kategori Barang :</label></td>
        <td><input type="text" name = "kategori_barang" ></td>
            </tr>
        <td><label for="nama_karyawan">Nama Karyawan :</label></td>
        <td><input type="text" name="nama_karyawan" ></td>
            </tr>
        <tr>
            <td><label for="divisi">Divisi :</label></td>
            <td><input type="text" name="divisi" /></td>
        </tr>
        <tr>
            <td><label for="jabatan">Jabatan :</label></td>
            <td><input type="text" name="jabatan" /></td>
        </tr>
        
    <button type="submit" id="update" name="update">Update</button>
        
    </form>
    </table>
  
</body>
</html>