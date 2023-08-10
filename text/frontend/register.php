<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check registration


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    $join_date = $_POST['join_date'];
    $age = $_POST['age'];

    // Hash and salt the password
  if (isset($_POST['submit'])){
    $sql = "INSERT INTO `user`(`full_name`, `phone_no`, `address`, `join_date`, `age`) VALUES ('$full_name', '$phone_no','$address',  '$join_date', '$age')";

    if ($conn->query($sql) === TRUE) {
       echo"succesfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
header("Location:index.php");
$conn->close();
?>