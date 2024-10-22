<?php
$servername = "localhost";
$username = "teju";
$password = "9901@Tejurk";
$dbname = "contact_notification";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
