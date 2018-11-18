<?php

function getConnection() {
	$dsn = "mysql:unix_socket=/cloudsql/gitlabusers-mn2017:europe-west1:test1;dbname=dbtest";
	$username = "mike1";
	$password = "mike1";

	try {
    	$conn = new PDO($dsn, $username, $password);
    	// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	return $conn;
    }
	catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    	return false;
    }
}

?>