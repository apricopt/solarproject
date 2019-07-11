<?php  
$servername = "localhost";
$username_db = "root";
$password = "";
$dbname = "pentacores";


$conn = mysqli_connect($servername , $username_db, $password, $dbname);

if (!$conn) {
	die("connection fail". mysql_connect_error());
}
