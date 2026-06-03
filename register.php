

<?php
include 'connect.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $gender = $_POST['gender'];
    $mobile_no = $_POST['mobile_no'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (username, age, weight, height, gender, mobile_no, password)
              VALUES ('$username','$age','$weight','$height','$gender','$mobile_no','$password')";

    if(mysqli_query($conn, $query)){
        echo "Registration Successful!";
    } else {
        echo "Error!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trainer Dashboard</title>

    <!-- Bootstrap add -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>



</body>
</html>