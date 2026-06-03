<?php
include 'connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM exercise WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<form method="POST">
    <input type="text" name="exercise" value="<?php echo $row['exercise_name']; ?>">
    <button name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    $exercise = $_POST['exercise'];

    $update = "UPDATE exercise SET exercise_name='$exercise' WHERE id='$id'";
    mysqli_query($conn, $update);

    header("Location: user_dashboard.php");
}
?>