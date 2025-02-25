<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_shakira";
// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Periksa koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
// Tutup koneksi (opsional)
// mysqli_close($conn);
?>