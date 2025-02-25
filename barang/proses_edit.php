<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Periksa koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari formulir
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$stok_barang = $_POST['stok_barang'];

// Perbarui data di database
$sql = "UPDATE barang SET nama_barang='$nama_barang', harga_barang='$harga_barang', stok_barang='$stok_barang' WHERE id_barang='$id_barang'";

if (mysqli_query($conn, $sql)) {
  // Redirect ke halaman daftar barang
  header("Location: daftar_barang.php");
} else {
  echo "Error: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>