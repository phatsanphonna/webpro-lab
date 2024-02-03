<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Registration Form</h1>

  <form id="form1" action="." method="post">
    <p>
      <label>Name :</label>
      <input type="text" id="name" name="name" value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : ''; ?>" style="<?php echo (isset($_POST['name']) && strlen($_POST['name']) < 5) ? 'color: red;' : ''; ?>" />
    </p>
    <p>
      <label>Address :</label>
      <textarea type="text" id="address" name="address" style="<?php echo (isset($_POST['address']) && strlen($_POST['address']) < 5) ? 'color: red;' : ''; ?>"><?php echo (isset($_POST['address'])) ? $_POST['address'] : ''; ?></textarea>
    <p>
      <label>Age :</label>
      <input type="number" id="age" name="age" value="<?php echo (isset($_POST['age'])) ? $_POST['age'] : ''; ?>" style="<?php echo (isset($_POST['age']) && $_POST['age'] < 5) ? 'color: red;' : ''; ?>" />
    </p>
    <p>
      <label>Profession :</label>
      <input type="text" id="profession" name="profession" value="<?php echo (isset($_POST['profession'])) ? $_POST['profession'] : ''; ?>" style="<?php echo (isset($_POST['profession']) && strlen($_POST['profession']) < 5) ? 'color: red;' : ''; ?>" />
    </p>
    <p>
      <label>Residential Status :</label>
      <fieldset id="radio-group" style="border:0 none;">
        <input type="radio" id="resident" name="radio-group" value="resident" <?php echo (isset($_POST['radio-group']) && $_POST['radio-group'] == 'resident') ? 'checked' : ''; ?>>
        <label for="student">Resident</label>
        <input type="radio" id="resident" name="radio-group" value="non-resident" <?php echo (isset($_POST['radio-group']) && $_POST['radio-group'] == 'non-resident') ? 'checked' : ''; ?>>
        <label for="teacher">Non-Resident</label>
      </fieldset>
    </p>

    <input type="submit" id="submit" name="submit" value="Submit">
  </form>
</body>

</html>