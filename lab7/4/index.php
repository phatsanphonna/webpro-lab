<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body>
  <div class="container mx-auto grid grid-cols-4 p-4 gap-4">
    <?php
    for ($i = 0; $i < 4; $i++) {
      echo "<div class='flex flex-col gap-4'>";
      for ($j = 0; $j < 6; $j++) {
        echo "<img class='rounded-lg' src='https://source.unsplash.com/random/?Skytrain&{$i}{$j}' />";
      }
      echo "</div>";
    }
    ?>
  </div>
</body>

</html>