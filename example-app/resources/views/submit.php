<?php
// Database configuration
$host = 'localhost'; // Database host
$db = '9weken';    // Database name
$user = 'root'; // Database username
$pass = ''; // Database password

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO client (naam, tsv, achternaam, adres, postcode, plaats, telefoon, gender, gbdatum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisssssss", $naam, $tsv, $achternaam, $adres, $postcode, $plaats, $telefoon, $gender, $gbdatum);

// Get data from the form
$name = $_POST['naam'];
$tsv = $_POST['tsv'];
$last_name = $_POST['achternaam'];
$address = $_POST['adres'];
$postcode = $_POST['postcode'];
$place = $_POST['plaats'];
$phone = $_POST['telefoon'];
$gender = $_POST['geslacht'];
$birthdate = date('Y-m-d', strtotime($_POST['geboorte'])); // Convert to MySQL date format

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>