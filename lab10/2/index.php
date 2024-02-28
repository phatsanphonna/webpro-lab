<?php
include 'conn.php';
session_start();

if (!isset($_GET['qid']) && !isset($_POST['qid'])) {
  session_unset();
  $_SESSION['total_score'] = 0;
  session_commit();
  header("Location: index.php?qid=1");
} else if ($_GET['qid'] > 10) {
  echo "Your score is " . $_SESSION['total_score'];
  exit;
}

if (isset($_POST['submit'])) {
  $qid = $_POST['qid'];
  $sql = "SELECT * FROM questions WHERE QID = $qid LIMIT 1";
  $result = $db->query($sql);
  $row = $result->fetchArray(SQLITE3_ASSOC);

  if ($_POST['answer'] == $row['Correct']) {
    $_SESSION['total_score'] = $_SESSION['total_score'] + 1;
    session_commit();
  }

  $qid++;

  header("Location: index.php?qid=$qid");
}
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
  <main class="container mx-auto py-4">
    <?php
    $qid = $_GET['qid'];
    $sql = "SELECT * FROM questions WHERE QID = $qid LIMIT 1";
    $result = $db->query($sql);

    while ($row = $result->fetchArray(SQLITE3_ASSOC)) { ?>
      <form method="POST" action=".">
        <h3><?php echo $row['QID'] . ') ' . $row['Stem'] ?></h3>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer" id='answer-a' value="A">
          <label class="form-check-label" for="answer-a">
            <?php echo $row['Alt_A'] ?>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer" id='answer-b' value="B">
          <label class="form-check-label" for="answer-b">
            <?php echo $row['Alt_B'] ?>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer" id='answer-c' value="C">
          <label class="form-check-label" for="answer-c">
            <?php echo $row['Alt_C'] ?>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer" id='answer-d' value="D">
          <label class="form-check-label" for="answer-d">
            <?php echo $row['Alt_D'] ?>
          </label>
        </div>
        <input type="hidden" name="qid" value="<?php echo $row['QID'] ?>">
        <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
      </form>
    <?php } ?>
  </main>
</body>

</html>