<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

        </div>
    </nav>
         <form action="proses_tambah.php" method="post">
            <div class="container">
            </div>
         </form>
           <h1>Data Barang</h1>
    </div>
  <label for="nama_barang">Nama Barang:</label>
  <input type="text" id="nama_barang" name="nama_barang" required><br><br>

  <label for="harga_barang">Harga Barang:</label>
  <input type="number" id="harga_barang" name="harga_barang" required><br><br>

  <label for="stok_barang">Stok Barang:</label>
  <input type="number" id="stok_barang" name="stok_barang" required><br><br> 

  <input type="submit" value="Tambah">
  <button type="submit" class="btn btn-primary"></button>
</form>

</body>
</html>