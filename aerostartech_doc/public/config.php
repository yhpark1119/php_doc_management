<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'azdatatech.com');
define('DB_USERNAME', 'yhpark11_aero');
define('DB_PASSWORD', 'fish1234');
define('DB_NAME', 'yhpark11_cms_doc');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>