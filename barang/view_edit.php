<!DOCTYPE html>
<html>
<head>
  <title>Edit Barang</title>
</head>
<body>
    <div class="container">
        <?php
        include '../../config/koneksi.php';
        $id_barang = $_GET['id_barang'];
        $query =mysqli_query(mysql: $conn, query: "SELECT * FORM barang WHERE id_barang='$id_barang'");
        $result = mysqli_fetch_array(result: $query);
        ?>
    </div>
         <h1>Edit Barang</h1>

<form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">ID barang</label>
        <input type="text" class="form-control" name="id_barang"
        value="<?php echo $result['id_barang']?>" id="exampleInputEmail" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Nama barang</label>
        <input type="text" class="form-control" name="nama_barang"
        value="<?php echo $result['nama_barang']?>" id="exampleInputPassword1">
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">harga</label>
        <input type="text" class="form-control" name="harga"
        value="<?php echo $result['harga']?>" id="exampleInputPassword1">
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">ID jenis</label>
        <input type="text" class="form-control" name="ID jenis"
        value="<?php echo $result['id_jenis']?>" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary"></button>
</form>

</body>
</html>