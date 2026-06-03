<?php
include 'connect.php';
session_start();

// user login check
if(!isset($_SESSION['user'])){
    header("Location: login.html");
}

$name = $_SESSION['user'];

// user data fetch
$query = "SELECT * FROM user WHERE username='$name'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">User Dashboard</h2>

    <!-- Profile Card -->
    <div class="card p-3 mb-4">
        <h4>Profile</h4>
        <p><b>Username:</b> <?php echo $row['username']; ?></p>
        <p><b>Age:</b> <?php echo $row['age']; ?></p>
        <p><b>Weight:</b> <?php echo $row['weight']; ?></p>
        <p><b>Height:</b> <?php echo $row['height']; ?></p>
        <p><b>Gender:</b> <?php echo $row['gender']; ?></p>
        <p><b>Mobile:</b> <?php echo $row['mobile_no']; ?></p>
    </div>

    <!-- Exercise Section -->
    <div class="card p-3">
        <h4>My Exercises</h4>

        <?php
        $query2 = "SELECT * FROM exercise WHERE username='$name'";
        $result2 = mysqli_query($conn, $query2);

        while($row2 = mysqli_fetch_assoc($result2)){
            echo "<p class='mb-2'>" . $row2['exercise_name'] . "

            <a href='edit.php?id=".$row2['id']."' class='btn btn-sm btn-warning ms-2'>Edit</a>

            <a href='delete.php?id=".$row2['id']."' class='btn btn-sm btn-danger ms-2'>Delete</a>

            </p>";
        }
        ?>

    </div>

    <br>
    <a href="logout.php" class="btn btn-danger">Logout</a>

</div>

</body>
</html>