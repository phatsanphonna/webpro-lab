<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container mx-auto">
    <?php
    if (isset($_POST['submit'])) {
      $sql = "DELETE FROM customers WHERE CustomerId = '" . $_POST['id'] . "'";
      $exec = $db->exec($sql);

      if (!$exec) {
        echo "Error: " . $db->lastErrorMsg();
      }
    }
    ?>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM customers";
        $result = $db->query($sql);

        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
          echo "<tr>";
          echo "<td>" . $row['CustomerId'] . "</td>";
          echo "<td>" . $row['FirstName'] . ' ' . $row['LastName'] . "</td>";
          echo "<td>" . $row['Address'] . "</td>";
          echo "<td>" . $row['Phone'] . "</td>";
          echo "<td>" . $row['Email'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <form method="POST">
      <?php
      // Get Last row ID
      $sql = "SELECT * FROM customers ORDER BY CustomerID DESC LIMIT 1";
      $result = $db->query($sql);
      $row = $result->fetchArray(SQLITE3_ASSOC);

      echo "<input type='hidden' name='id' value='" . $row['CustomerId'] . "'>";

      $db->close();
      ?>
      <button class="btn btn-primary w-full" name='submit' type="submit">Delete Last Row</button>
    </form>
  </div>
</body>

</html>