<?php

$servername = "localhost";
$username = "webprogmi222_sf221";
$password = "xE*Y2nleNVvZm[!!";
$dbname = "webprogmi222_sf221";

include 'index.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connection success";
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$website = mysqli_real_escape_string($conn, $_POST['website']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$sql = "INSERT INTO barabajante3_myguests (name, email, website, comment, gender)
VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
