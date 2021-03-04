<?php
//Development Connection
$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "onlinebanking";

//Remote Database Connection


$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Database Connection Failed";
}

?>