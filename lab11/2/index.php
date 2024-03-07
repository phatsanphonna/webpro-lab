<?php
include './conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  if (isset($_POST['save'])) {
    setcookie('employee[id]', $id, time() + 3600);
    setcookie('employee[firstname]', $firstname, time() + 3600);
    setcookie('employee[lastname]', $lastname, time() + 3600);
    setcookie('employee[address]', $address, time() + 3600);
    setcookie('employee[email]', $email, time() + 3600);
    setcookie('employee[phone]', $phone, time() + 3600);
  } else if (isset($_POST['delete'])) {
    setcookie('employee[id]', '', time() - 3600);
    setcookie('employee[firstname]', '', time() - 3600);
    setcookie('employee[lastname]', '', time() - 3600);
    setcookie('employee[address]', '', time() - 3600);
    setcookie('employee[email]', '', time() - 3600);
    setcookie('employee[phone]', '', time() - 3600);
  }
}

print_r($_COOKIE);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <form class='container mx-auto p-4' action="." method="POST">
    <?php
    $employee = array();

    if (isset($_POST['show'])) {
      $employee = $_COOKIE['employee'];
    } else if (!isset($_COOKIE['employee'])) {
      $sql = "SELECT * FROM customers LIMIT 1";
      $query = $db->query($sql);
      $result = $query->fetchArray(SQLITE3_ASSOC);
      $employee = array(
        'id' => $result['CustomerId'],
        'firstname' => $result['FirstName'],
        'lastname' => $result['LastName'],
        'address' => $result['Address'],
        'email' => $result['Email'],
        'phone' => $result['Phone']
      );
    } else {
      $employee = array(
        'id' => '',
        'firstname' => '',
        'lastname' => '',
        'address' => '',
        'email' => '',
        'phone' => ''
      );
    }
    ?>
    <label for="id" class="form-label">Employee ID:</label>
    <input class="form-control" type="number" name="id" id="id" value="<?php echo $employee['id'] ?>">

    <label for="firstname" class="form-label">Firstname:</label>
    <input class="form-control" type="text" name="firstname" id="firstname" value="<?php echo $employee['firstname'] ?>">

    <label for="lastname" class="form-label">Lastname:</label>
    <input class="form-control" type="text" name='lastname' id='lastname' value="<?php echo $employee['lastname'] ?>">

    <label for="address" class="form-label">Address:</label>
    <textarea class="form-control" rows="3" name="address" id="address"><?php echo $employee['address'] ?>
    </textarea>

    <label for="email" class="form-label">Email:</label>
    <input class="form-control" type="email" name="email" id="email" value="<?php echo $employee['email'] ?>">

    <label for="phone" class="form-label">Phone:</label>
    <input class="form-control" type="tel" name="phone" id="phone" value="<?php echo $employee['phone'] ?>">

    <div class="mt-4">
      <button name="save" class="btn btn-success" type="submit">Save Data</button>
      <button name="show" class="btn btn-primary" type="submit">Show Data</button>
      <button name="delete" type="submit" class="btn btn-danger">Clear Data</button>
    </div>
  </form>
</body>

</html>