<?php
$name = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['email'];
$message = $_POST['message'];

$con = mysqli_connect('localhost', 'root', '', 'cl_database');

$sql = "INSERT INTO `cl_messages_db` (`Id`, `Name`, `Surname`, `Email`, `Message`) 
VALUES ('0', '$name', '$lname', '$mail', '$message')";


$cs = mysqli_query($con, $sql);

if($cs)
{
	echo "Message Received";
}
?>