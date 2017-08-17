<?php
$host = "localhost";
$username="root";
$pass = "";
$dbname = "registration";

$connnect=mysqli_connect($host,$username,$pass,$dbname);

if (!$connnect) {
	echo "Some Error Occured!!. Please Try Agin Later!!!";
}


?>