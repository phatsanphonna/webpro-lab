<?php
$api_url = "http://10.0.15.21/lab/lab12/restapis/10countries.json";
$response = file_get_contents($api_url);
$result = json_decode($response);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php foreach ($result as $country) { ?>
    <div>
      <h1>Name: <?php echo $country->name; ?></h1>
      <p>Capital: <?php echo $country->capital; ?></p>
      <p>Population: <?php echo $country->population; ?></p>
      <p>Region: <?php echo $country->area; ?></p>
      <p>Location: <?php echo $country->latlng[0] . ' ' . $country->latlng[1]; ?></p>
      <p>Borders:
        <?php
        foreach ($country->borders as $border) {
          echo $border . ' ';
        }
        ?>
      </p>
      <img src="<?php echo $country->flag ?>" alt="">
    </div>
  <?php } ?>
</body>

</html>