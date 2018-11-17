<?php
echo "Hello world!";


$servername = MYSQL_DSN;
$username = MYSQL_USER;
$password = MYSQL_PASSWORD;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$conn->close();

//$sql = "CREATE TABLE SearchCache (search char(50) NOT NULL, fullSearch char(200) NOT NULL, json varchar(4000) NOT NULL, create_ts timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, uId char(16) NOT NULL )";

?>
