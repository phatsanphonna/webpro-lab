<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include "../conn.php";

  if (isset($_GET['index'])) {
    $sql = "SELECT * FROM course LIMIT 1 OFFSET " . intval($_GET['index']);
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
      while ($row = mysqli_fetch_assoc($query)) {
        echo "ID: " . $row['course_id'] . "<br>";
        echo "Title: " . $row['title'] . "<br>";
        echo "Dept: " . $row['dept_name'] . "<br>";
        echo "Credit: " . $row['credit'] . "<br>";
      }
    }
  }
  ?>

  <form action="." method="GET">
    Enter Index: <input type="number" name="index">
    <button type="submit">Query</button>
  </form>
</body>

</html>