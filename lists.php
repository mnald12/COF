<?php 

include './db/connection.php';

$lists = [];
$query = "SELECT * FROM rates";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    $lists[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lists</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link href="./styles.css" rel="stylesheet">
</head>
</head>
<body>

<div class="container">
    
    <div class="navbar">
        <ul>
          <a href="./">Home</a>
          <a class="active" href="./lists.php">Lists</a>
        </ul>
    </div>

    <div class="header">
        <img src="./aclc2.png" alt="Logo" />
        <h1 class="header-text">COF Lists</h1>
    </div>
    <br>
        
    <table class="rating-table">
        <thead style="text-align: left">
            <th>Instructor</th>
            <th>Subject</th>
            <th>Department</th>
            <th>Date</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($lists as $row): ?>
                <tr>
                    <td><?= $row['instructor'] ?></td>
                    <td><?= $row['subject'] ?></td>
                    <td><?= $row['department'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td><a href="./viewer.php?id=<?= $row['id'] ?>">View</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
    
</body>
</html>