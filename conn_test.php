<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
// Create database
// $sql = "CREATE DATABASE testDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }


CloseCon($conn);
?>