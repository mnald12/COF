<?php
include './db/connection.php';

$comps = [];
$query = "SELECT * FROM questions WHERE category = 'teaching competence'";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    $comps[] = $row;
}

$per = [];
$pquery = "SELECT * FROM questions WHERE category = 'personality'";
$presult = $conn->query($pquery);
while ($row = $presult->fetch_assoc()) {
    $per[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peer Evaluation Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="navbar">
        <ul>
          <a class="active" href="./">Home</a>
          <a href="./lists.php">Lists</a>
        </ul>
      </div>
      <div class="header">
        <img src="./aclc2.png" alt="Logo" />
        <h1 class="header-text">Class Observation Form</h1>
      </div>
      <br>
      <form action="submit-form.php" method="POST">
        <div class="form-group">
          <div class="form-group-item">
            <label for="department">Instructor :</label>
            <input type="text" id="ins" name="ins" required/>
          </div>
          <div class="form-group-item">
            <label for="department">Subject :</label>
            <input type="text" id="subs" name="sub" required/>
          </div>
          <div class="form-group-item">
            <label for="department">Department :</label>
            <input type="text" id="dep" name="dep" required/>
          </div>
          <div class="form-group-item">
            <label for="department">Date :</label>
            <input type="date" id="date" name="date" required/>
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
            <?php foreach ($comps as $row): ?>
            <tr class="trs1">
              <td><?= $row['question'] ?></td>
              <td class="inp"><input type="radio" name="c<?= $row['id'] ?>" value="1" required /></td>
              <td class="inp"><input type="radio" name="c<?= $row['id'] ?>" value="2" /></td>
              <td class="inp"><input type="radio" name="c<?= $row['id'] ?>" value="3" /></td>
              <td class="inp"><input type="radio" name="c<?= $row['id'] ?>" value="4" /></td>
              <td class="inp"><input type="radio" name="c<?= $row['id'] ?>" value="5" /></td>
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
            <?php foreach ($per as $row): ?>
            <tr class="trs2">
              <td><?= $row['question'] ?></td>
              <td class="inp"><input type="radio" name="p<?= $row['id'] ?>" value="1" required /></td>
              <td class="inp"><input type="radio" name="p<?= $row['id'] ?>" value="2" /></td>
              <td class="inp"><input type="radio" name="p<?= $row['id'] ?>" value="3" /></td>
              <td class="inp"><input type="radio" name="p<?= $row['id'] ?>" value="4" /></td>
              <td class="inp"><input type="radio" name="p<?= $row['id'] ?>" value="5" /></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <br />
        <textarea name="comment" placeholder="Enter comment here for the teacher..."></textarea>
        <div class="button-group">
          <button type="submit" class="btn btn-save">Save</button>
          <button type="reset" class="btn btn-cancel">Cancel</button>
        </div>
      </form>
    </div>
    <script src="./script.js"></script>
  </body>
</html>
