<?php
include 'connect.php';

if(isset($_POST['assign'])){
    $username = $_POST['username'];
    $exercise = $_POST['exercise'];

    $query = "INSERT INTO exercise (username, exercise_name)
              VALUES ('$username','$exercise')";

    mysqli_query($conn, $query);

    echo "Exercise Assigned!";
}
?>
<!DOCTYPE html>
<html>
<head>
    

    <!-- Bootstrap add -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

