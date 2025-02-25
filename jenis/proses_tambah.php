<?php

$nama_jenis = $_POST['nama_jenis'];
$id_jenis = $_POST['id_jenis'];


include '../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO JENIS VALUES(
     '$id_jenis',
     '$nama_jenis'
     )");

     if($query){
        echo "<script>alert('Data berhasil di simpan')</script>";
        echo "<script>window.location.href='index.php'</script>";
     }else{
        echo "<script>alert('Data gagal di simpan')</script>";
        echo "<script>window.location.href='tambah.php'</script>";
     }