<?php
 include("koneksi.php");
 isset($_POST['edit']);
   $id = $_POST['id_siswa'];
   $nama=$_POST['nama'];
   $kelas=$_POST['kelas'];
   $namajurusan=$_POST['nama_jurusan'];
   $tahun = $_POST['tahun'];
   $nominal = $_POST['nominal'];

   $sql = "UPDATE tb_murid set nama='$nama','kelas=$kelas' where id_siswa='$id'";
   $query = mysqli_query($db,$sql);

   $sql = "UPDATE tb_jurusan set nama_jurusan='$nama_jurusan' where id_jurusan='$id'";
    $query = mysqli_query($db,$sql);

    $sql = "UPDATE tb_spp set tahuhn='$tahun','nominal=$nominal' where id_siswa='$id'";
     $query = mysqli_query($db,$sql);

     if($query){
        header('location:join.php?status=sukses');
     }else{
        header('location:join.php?status:gagal');
     }
