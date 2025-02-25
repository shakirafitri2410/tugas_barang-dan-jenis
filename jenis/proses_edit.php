<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data barang</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Data jenis</h1>

    <!-- Create Form -->
    <form method="POST" action="crud.php">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group"> 
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Add</button>
    </form>

    <!-- Read Data -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID </th>
          <th>Name</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Include database connection file
        include 'db_config.php';

        // Fetch data from database
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        // Display data in table 
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>";
            echo "<a href='crud.php?delete=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
            echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a>";
            echo "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr td colspan ='4'>No data found.</td></tr>";
        } 

        mysqli_close($conn);
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>