
<?php
$server_name ='localhost';
$db_user_name ='root';
$db_password ='';
$db_name ='final_version_okama';

$conn = mysqli_connect($server_name, $db_user_name, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
mysqli_set_charset($conn,"utf8");

?>
