<?php

$con = mysqli_connect('localhost', 'root', '', 'cl_database');

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$txtName = $_POST['email'];
$txtPassword = $_POST['psw'];

$sql = "INSERT INTO `clients_db` (`Id`, `fldName`, `fldSurname`, `fldEmail`, `fldPassword`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
?>