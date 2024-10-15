<?php
$host = 'localhost'; 
$db = '9weken';    
$user = 'root'; 
$pass = ''; 

//maak connectie
$conn = new mysqli($host, $user, $pass, $db);

// Check connectie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO client (naam, tsv, achternaam, adres, postcode, plaats, telefoon, gender, gbdatum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisssssss", $naam, $tsv, $achternaam, $adres, $postcode, $plaats, $telefoon, $gender, $gbdatum);

// data halen van form
$name = $_POST['naam'];
$tsv = $_POST['tsv'];
$last_name = $_POST['achternaam'];
$address = $_POST['adres'];
$postcode = $_POST['postcode'];
$place = $_POST['plaats'];
$phone = $_POST['telefoon'];
$gender = $_POST['geslacht'];
$birthdate = date('Y-m-d', strtotime($_POST['geboorte'])); // Convert to MySQL date format

// uitvoeren
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// connectie afsluiten
$stmt->close();
$conn->close();
?>