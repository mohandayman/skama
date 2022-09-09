<?php 
include ('../connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){

$email = $_POST['email'];
$password = $_POST['password'];
$sql=" insert into suser(email, password) VALUES('$email','$password')";
$result = $conn->query($sql);
}



?>