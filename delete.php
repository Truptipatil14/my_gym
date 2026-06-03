<?php
include 'connect.php';

$id = $_GET['id'];

$query = "DELETE FROM exercise WHERE id='$id'";
mysqli_query($conn, $query);

header("Location: user_dashboard.php");
?>