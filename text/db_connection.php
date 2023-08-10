<?php
function openDatabaseConnection() {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'database';

    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function closeDatabaseConnection($conn) {
    mysqli_close($conn);
}
?>
