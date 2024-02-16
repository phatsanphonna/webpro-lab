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

    if (isset($_POST['course_id']) && $http_response_header['REQUEST_METHOD'] == "POST") {
      $sql = "UPDATE course SET title = '" . $_POST['title'] . "', dept_name = '" . $_POST['dept_name'] . "', credit = '" . $_POST['credit'] . "' WHERE course_id = '" . $_POST['course_id'] . "'";
      $query = mysqli_query($conn, $sql);
    }

    if (isset($_GET['id'])) {
      $sql = "SELECT * FROM course WHERE course_id = '" . $_GET['id'] . "'";
      $query = mysqli_query($conn, $sql);

      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
          // editable box
          echo "<form action='.' method='POST' class='box'>";
          echo "<h2 class='title'x>Course Details</h2>";
          echo "<div class='field'>";
          echo "<label class='label'>Course ID</label>";
          echo "<div class='control'>";
          echo "<input class='input' disabled type='text' placeholder='Course ID' value='" . $row['course_id'] . "'>";
          echo "</div>";
          echo "</div>";

          echo "<div class='field'>";
          echo "<label class='label'>Title</label>";
          echo "<div class='control'>";
          echo "<input class='input' type='text' placeholder='Title' value='" . $row['title'] . "'>";
          echo "</div>";
          echo "</div>";

          echo "<div class='field'>";
          echo "<label class='label'>Dept. Name</label>";
          echo "<div class='control'>";
          echo "<input class='input' type='text' placeholder='Dept. Name' value='" . $row['dept_name'] . "'>";
          echo "</div>";
          echo "</div>";

          echo "<div class='field'>";
          echo "<label class='label'>Credit</label>";
          echo "<div class='control'>";
          echo "<input class='input' type='number' placeholder='Credit' value='" . $row['credit'] . "'>";
          echo "</div>";
          echo "</div>";

          echo "<div class='field'>";
          echo "<button type='submit' class='button is-primary'>Update</button>";
          echo "<button type ='reset' class='button mx-2 is-danger'>Reset</button>";
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