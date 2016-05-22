<?php
//Connect it MySQL
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'shoutit';

$conn = mysqli_connect($host, $user, $password, $database);

//Test connection

if(mysqli_connect_errno()){
    die('Failed to connect to MySQL:'.mysqli_connect_error());
}

?>
