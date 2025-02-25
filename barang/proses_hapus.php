<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Periksa koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil ID barang dari URL
$id_barang = $_GET['id_barang'];

// Hapus data barang dari database
$sql = "DELETE FROM barang WHERE id_barang='$id_barang'";

if (mysqli_query($conn, $sql)) {
  // Redirect ke halaman daftar barang
  header("Location: daftar_barang.php");
} else {
  echo "Error: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>