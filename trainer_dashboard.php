<?php
include 'connect.php';
session_start();

//  Trainer login check (security)
if(!isset($_SESSION['trainer'])){
    header("Location: login.html");
    exit();
}

// users fetch
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trainer Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Trainer Dashboard</h2>

    <table class="table table-bordered table-hover bg-white">
        <tr class="table-dark">
            <th>Username</th>
            <th>Assign Exercise</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['username']; ?></td>

            <td>
                <form action="assign.php" method="POST" class="d-flex">
                    <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
                    
                    <input type="text" name="exercise" class="form-control me-2" placeholder="Exercise name" required>
                    
                    <button name="assign" class="btn btn-success">Assign</button>
                </form>
            </td>
        </tr>
        <?php } ?>

    </table>

    <a href="logout.php" class="btn btn-danger">Logout</a>

</div>

</body>
</html>