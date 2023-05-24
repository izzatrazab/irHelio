<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sse";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Create database
    $createDB = "CREATE DATABASE IF NOT EXISTS `sse`";
    if ($conn->query($createDB) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

$conn = new mysqli($servername, $username, $password, $dbname);

//Create table
$createtable = "CREATE TABLE IF NOT EXISTS `name_list` (
`id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(50) NOT NULL,
`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($createtable) === TRUE) {
    echo "Table name_list created successfully/Existed";
} else {
    echo "Error creating table: " . $conn->error;
}

//Insert data to name_list table
if (isset($_POST['nama'])) {
    $sql = "INSERT INTO `name_list` (`name`) VALUES ('" . $_POST['nama'] . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: update.html");
    exit();
} else {
    echo "yollo";
}
