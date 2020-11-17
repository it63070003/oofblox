<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'oofdb.mysql.database.azure.com');
define('DB_USERNAME', 'oof@oofdb');
define('DB_PASSWORD', 'Hello12345');
define('DB_NAME', 'oofbase');
define('DB_PORT', 3306)
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>