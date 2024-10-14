<?php
include './db/connection.php';

$instructor = mysqli_real_escape_string($conn, $_POST["ins"]);
$subject = mysqli_real_escape_string($conn, $_POST["sub"]);
$department = mysqli_real_escape_string($conn, $_POST["dep"]);
$date = mysqli_real_escape_string($conn, $_POST["date"]);
$comment = mysqli_real_escape_string($conn, $_POST["comment"]);

$competence = [];
$query = "SELECT * FROM questions WHERE category = 'teaching competence'";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    $competence[] = $row;
}

$personality = [];
$pquery = "SELECT * FROM questions WHERE category = 'personality'";
$presult = $conn->query($pquery);
while ($row = $presult->fetch_assoc()) {
    $personality[] = $row;
}

$comps = array();
$pers = array();

$score = 0;
$total = 0;

foreach($competence as $c){
    $id = $c['id'];
    $q = $c['question'];
    $cat = $c['category'];
    $val = mysqli_real_escape_string($conn, $_POST["c$id"]);
    array_push($comps, "$q~$val");
    $total += $val;
}

foreach($personality as $p){
    $id = $p['id'];
    $q = $p['question'];
    $cat = $p['category'];
    $val = mysqli_real_escape_string($conn, $_POST["p$id"]);
    array_push($pers, "$q~$val");
    $total += $val;
}

$score = 100 / $total;

$comprate = implode('|', $comps);
$perrate = implode('|', $pers);

$insert="INSERT Into rates (instructor, subject, date, department, comprate, perrate, comment, total, score) VALUES ('$instructor', '$subject', '$date', '$department', '$comprate', '$perrate', '$comment', '$total', '$score')";
mysqli_query($conn, $insert);

header('location: ./index.php');

?> 