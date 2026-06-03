<?php

$conn = mysqli_connect("localhost", "root", "", "fitness_project","3307");

if(!$conn){
    die("Connection Failed");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trainer Dashboard</title>

    <!-- Bootstrap add -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

