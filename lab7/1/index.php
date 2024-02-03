<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form id="form1" action="." method="post">

    <p>
      <label>Enter a number :</label>
      <input type="number" id="number" name="number" value="<?php echo (isset($_POST['number']))?$_POST['number']:'';?>" />
    </p>

    <input type="submit" id="submit" name="submit" value="Submit">
  </form>

  <h2>Multiplication Table</h2>
  <table>
  <?php
    if (isset($_POST['submit']) && isset($_POST['number'])) {
      $number = $_POST['number'];
      for ($i = 1; $i <= 12; $i++) {
        echo "<tr>";
        echo "<td>" . $number . " x " . $i . " = " . $number * $i . "</td>";
        echo "</tr>";
      }
    }
  ?>
  </table>
</body>

</html>