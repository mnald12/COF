<?php
include './db/connection.php';

$id = mysqli_real_escape_string($conn, $_GET['id']);

$q = "SELECT * FROM rates Where id = '$id' ";
$r = $conn->query($q);
$rates = $r->fetch_assoc();

$ecomps = explode("|", $rates['comprate']);
$eper = explode("|", $rates['perrate']);

$comps = [];
$per = [];

foreach($ecomps as $c){
    $nv = explode("~", $c);
    array_push($comps, $nv);
}

foreach($eper as $p){
    $nv = explode("~", $p);
    array_push($per, $nv);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COF - Preview</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link href="./styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="header">
        <img src="./aclc2.png" alt="Logo" />
        <h1 class="header-text">Class Observation Form</h1>
      </div>
      <br>
      <form action="submit-form.php" method="POST">
        <div class="form-group">
          <div class="form-group-item">
            <label for="department">Instructor :</label>
            <input type="text" value="<?= $rates['instructor'] ?>" disabled/>
          </div>
          <div class="form-group-item">
            <label for="department">Subject :</label>
            <input type="text" value="<?= $rates['subject'] ?>" disabled/>
          </div>
          <div class="form-group-item">
            <label for="department">Department :</label>
            <input type="text" value="<?= $rates['department'] ?>" disabled/>
          </div>
          <div class="form-group-item">
            <label for="department">Date :</label>
            <input type="date" value="<?= $rates['date'] ?>" disabled/>
          </div>
        </div>
        <div style="padding-top: 10px;">
          <p>The following rating scale shall be used. <b>5 - Outstanding, 4 - Good, 3 - Satisfactory, 2 - Unsatisfactory, 1 - Needs Improvement.</b></p>
        </div>
        <table class="rating-table">
          <thead>
            <tr>
              <th style="text-align: left">I. Teaching competence</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($comps as $id => $row): ?>
            <tr class="trs1">
              <td><?= $row[0] ?></td>
              <td><input name="cq<?= $id ?>" type="radio" <?= $row[1] == 1 ? "checked" : "" ?> /></td>
              <td><input name="cq<?= $id ?>"  type="radio" <?= $row[1] == 2 ? "checked" : "" ?> /></td>
              <td><input name="cq<?= $id ?>"  type="radio" <?= $row[1] == 3 ? "checked" : "" ?> /></td>
              <td><input name="cq<?= $id ?>"  type="radio" <?= $row[1] == 4 ? "checked" : "" ?> /></td>
              <td><input name="cq<?= $id ?>"  type="radio" <?= $row[1] == 5 ? "checked" : "" ?> /></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <table class="rating-table">
          <thead>
            <tr>
              <th style="text-align: left">II. Personality</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($per as $id => $row): ?>
            <tr class="trs2">
              <td><?= $row[0] ?></td>
              <td><input name="pq<?= $id ?>" type="radio" <?= $row[1] == 1 ? "checked" : "" ?> /></td>
              <td><input name="pq<?= $id ?>" type="radio" <?= $row[1] == 2 ? "checked" : "" ?> /></td>
              <td><input name="pq<?= $id ?>" type="radio" <?= $row[1] == 3 ? "checked" : "" ?> /></td>
              <td><input name="pq<?= $id ?>" type="radio" <?= $row[1] == 4 ? "checked" : "" ?> /></td>
              <td><input name="pq<?= $id ?>" type="radio" <?= $row[1] == 5 ? "checked" : "" ?> /></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <br />
        <textarea disabled><?= $rates['comment'] ?></textarea>
        <br>
        <br>
        <div>
            <p><b>TOTAL (Out of 100) = </b><?= $rates['total'] ?></p>
            <p><b>COF Score = TOTAL / 100 = </b><?= $rates['score'] ?></p>
        </div>
        <br>
        <div class="button-group">
          <a class="btn btn-cancel" href="./lists.php">Back</a>
        </div>
      </form>
    </div>
    <script src="./script.js"></script>
  </body>
</html>
