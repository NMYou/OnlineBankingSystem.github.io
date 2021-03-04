<?php
//Development Connection
// $servername = "localhost";
// $dBUsername = "root";
// $dbPassword = "";
// $dBName = "onlinebanking";

//Remote Database Connection
$servername = "remotemysql.com";
$dBUsername = "eHRMvr2Cvq";
$dbPassword = "7FuEVESBrO";
$dBName = "eHRMvr2Cvq";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Database Connection Failed";
}

?>