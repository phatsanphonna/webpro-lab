<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <title>Document</title>
</head>

<body>
  <div class="container mx-auto p-2">
    <?php
    include "../conn.php";

    if (isset($_POST['submit'])) {
      $sql = "UPDATE course SET title = '" . $_POST['title'] . "', dept_name = '" . $_POST['dept_name'] . "', credit = '" . $_POST['credit'] . "' WHERE course_id = '" . $_POST['id'] . "'";
      $query = mysqli_query($conn, $sql);
    }

    if (isset($_POST['delete'])) {
      $sql = "DELETE FROM course WHERE course_id = '" . $_POST['id'] . "'";
      $query = mysqli_query($conn, $sql);
    }

    if (isset($_GET['id']) || isset($_POST['id'])) {
      $course_id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];

      $sql = "SELECT * FROM course WHERE course_id = '" . $course_id . "'";
      $query = mysqli_query($conn, $sql);

      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
          // editable box
          echo "<form action='.' method='POST' class='box'>";
          echo "<h2 class='title'x>Course Details</h2>";
          echo "<div class='field'>";
          echo "<label class='label'>Course ID</label>";
          echo "<div class='control'>";
          echo "<input class='input' name='id' readonly type='text' placeholder='Course ID' value='" . $row['course_id'] . "'>";
          echo "</div>";
          echo "</div>";

          echo "<div class='field'>";
          echo "<label class='label'>Title</label>";
          echo "<div class='control'>";
          echo "<input class='input' name='title' type='text' placeholder='Title' value='" . $row['title'] . "'>";
          echo "</div>";
          echo "</div>";

          echo "<div class='field'>";
          echo "<label class='label'>Dept. Name</label>";
          echo "<div class='control'>";
          echo "<input class='input' name='dept_name' type='text' placeholder='Dept. Name' value='" . $row['dept_name'] . "'>";
          echo "</div>";
          echo "</div>";

          echo "<div class='field'>";
          echo "<label class='label'>Credit</label>";
          echo "<div class='control'>";
          echo "<input class='input' name='credit' type='number' placeholder='Credit' value='" . $row['credit'] . "'>";
          echo "</div>";
          echo "</div>";

          echo "<div class='field'>";
          echo "<button type='submit' name='submit' class='button is-primary mr-2'>Update</button>";
          echo "<button type='submit' name='delete' class='button is-danger'>Delete</button>";
          echo "</div>";

          echo "</form>";
        }
      }
    }
    ?>
    <table style="width: 100%;" class="table">
      <thead>
        <th>Course ID</th>
        <th>Title</th>
        <th>Dept. Name</th>
        <th>Credit</th>
      </thead>
      <tbody>
        <?php
        include "../conn.php";

        $sql = "SELECT * FROM course";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td><a href='?id=" . $row["course_id"] . "'>" . $row["course_id"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["dept_name"] . "</td>";
            echo "<td>" . $row["credit"] . "</td>";
            echo "</tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>