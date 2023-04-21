<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO appointments (name, email, dob, date, time) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $dob, $date, $time);

// Set parameters and execute the statement
$name = $_POST["name"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$date = $_POST["date"];
$time = $_POST["time"];
$stmt->execute();

echo "Appointment booked successfully.";

$stmt->close();
$conn->close();
?>
