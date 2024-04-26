<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'petadoption123');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$oid = $_GET['var'];

$sql="UPDATE order_details set status='Completed' where orderid=$oid";
if($result = mysqli_query($link, $sql))
{
echo "ORDER DETAILS UPDATED SUCCESSFULLY";
}

mysqli_close($link);

?>
