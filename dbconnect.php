<?php


$servername = $_GET["server"];
$username = $_GET["user"];
echo "$servername<br>";
#echo "<br>";
echo "$username<br>";
#echo "<br>";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";

// Create database
$sql = "CREATE TABLE Persons
(
PersonID int,
LastName varchar(255),
FirstName varchar(255),
Address varchar(255),
City varchar(255)
);";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



$conn->close();
?>