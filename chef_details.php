<?php

// Connect to the MySQL database using PHPMyAdmin
$servername = "localhost:3306";
$username = "Riddhi";
$password = "6354";
$dbname = "ChefOnDemand";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the cook's information
$first_name = $_POST['FirstName'];
$last_name = $_POST['LastName'];
$age = $_POST['Age'];
$experience = $_POST['Experience'];
$phone_number = $_POST['number'];
$gender = $_POST['gender'];
$address = $_POST['Add'];
$city = $_POST['City'];
$zip_code = $_POST['zip_code'];
$state = $_POST['state'];
// Insert the cook's information into the database
$sql = "INSERT INTO cooks (first_name, last_name, age, experience, phone_number, gender, address, city, zip_code, state)
VALUES ('$first_name', '$last_name', '$age', '$experience', '$phone_number', '$gender', '$address', '$city', '$zip_code', '$state')";

if ($conn->query($sql) === TRUE) {
    echo "Cook's information has been successfully added to the database.";
    header("Refresh:2; url=/Applications/MAMP/htdocs/ChefOnDemand/sucess.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
