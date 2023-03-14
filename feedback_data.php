<?php

include('db.php');

$name = mysqli_escape_string($conn, $_POST['name']);
$email = mysqli_escape_string($conn, $_POST['email']);
$msg = mysqli_escape_string($conn, $_POST['message']);

mysqli_query($conn, "INSERT INTO `sending_details`(`name`, `email`,`message`) VALUES ('$name', '$email', '$msg')");

echo 'Success';

?>