<?php
include 'connect.php';
session_start();

// Trainer login
if(isset($_POST['trainer_login'])){
    $name = $_POST['trainername'];
    $password = $_POST['password'];

    $query = "SELECT * FROM trainer WHERE name='$name' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['trainer'] = $name;
        header("Location: trainer_dashboard.php");
        exit();
    } else {
        echo "Invalid Trainer!";
        exit();
    }
}

// User login
if(isset($_POST['user_login'])){
    $name = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$name' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['user'] = $name;
        header("Location: user_dashboard.php");
        exit();
    } else {
        echo "Invalid User!";
        exit();
    }
}
?>