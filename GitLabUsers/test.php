<?php
echo "Hello world! \n";

include_once "connection.php";

$conn = getConnection();

if ($conn == false) {
    echo "connection failed";
}
//$sql = "CREATE TABLE SearchCache (search char(50) NOT NULL, fullSearch char(200) NOT NULL, json varchar(4000) NOT NULL, create_ts timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, uId char(16) NOT NULL )";

?>
