<?php
echo "Hello world!";


$dsn = MYSQL_DSN;
$username = MYSQL_USER;
$password = MYSQL_PASSWORD;

try {
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    $conn->close();
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


//$sql = "CREATE TABLE SearchCache (search char(50) NOT NULL, fullSearch char(200) NOT NULL, json varchar(4000) NOT NULL, create_ts timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, uId char(16) NOT NULL )";

?>
