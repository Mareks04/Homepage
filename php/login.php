<?php  
    $user=$_POST['Email'];  
    $pass=$_POST['psw'];  

$mysqli = new mysqli('localhost', 'root', '', 'cl_database');
$result = $mysqli->query("SELECT id FROM clients_db WHERE fldEmail = '$user'");
if (!empty($result) && $result->num_rows > 0) {
    header("Location: ../html/home.html");
    exit();
} else {
    echo "Please register first!";
}
$mysqli->close();
?>