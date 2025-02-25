<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

        </div>
    </nav>
    <div class="container">
        <h1>Data barang</h1>      <br>
        <?php
        include '../../config/koneksi.php';
        $id_barang = $GET['id_barang'];
        $query = mysqli_query(mysql: $conn, query: "SELECT * FROM barang WHERE id_barang='$id_barang'");
        $result =mysqli_fetch_array(result: $query);
        ?>
        <form action="proses_hapus.php?id_barang=<?php echo $result['id_barang']?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">ID barang</label>
                <input type="text" class="form-control" name="id_barang"
                value="<?php echo $result['id_barang']?> id="exampleInputEmail aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang"
                value="<?php echo $result['nama_barang']?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">harga</label>
                <input type="text" class="form-control" name="harga"
                value="<?php echo $result['harga']?>" id="exampleInputPassword1">
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">ID jenis</label>
                <input type="text" class="form-control" name="id_jenis"
                value="<?php echo $result['id_jenis']?>" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary"></button>
        </form>
    </div>
</body>
</html>