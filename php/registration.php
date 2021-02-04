<?php

$con = mysqli_connect('localhost', 'root', '','cl_database');


// declarations
$txtName = $_POST['txtName'];
$txtSurname = $_POST['txtSurname'];
$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['psw-repeat'];

$sql = "INSERT INTO `clients_db` (`Id`, `fldName`, `fldSurname`, `fldEmail`, `fldPassword`) 
VALUES ('0', '$txtName', '$txtSurname', '$txtEmail', '$txtPassword')";

$cs = mysqli_query($con, $sql);

if($cs)
{
	echo "Contact Records Inserted";
}
?>