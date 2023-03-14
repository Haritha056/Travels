<?php

$server = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = 'travels';
$conn = mysqli_connect($server, $dbuser, $dbpass, $database);

date_default_timezone_set("Asia/Calcutta"); 
$dateTime = date('Y-m-d h:i:s');
$date = date('Y-m-d');

$path = '/prr_Travels/';

?>