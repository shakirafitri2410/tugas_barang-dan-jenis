<!DOCTYPE html>
<html>
<head>
  <title>Edit Jenis Barang</title>
</head>
<body>

<h1>Edit Jenis Barang</h1>

<form method="post" action="proses_edit_jenis.php">
  <input type="hidden" name="id_jenis" value="<?php echo $_GET['id_jenis']; ?>">

  <label for="nama_jenis">Nama Jenis:</label>
  <input type="text" id="nama_jenis" name="nama_jenis" value="<?php echo $row['nama_jenis']; ?>" required><br><br>

  <input type="submit" value="Simpan">
</form>

</body>
</html>