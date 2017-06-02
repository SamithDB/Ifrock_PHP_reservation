<?php

session_start();

include 'connection.php';

$user = $_POST['uname'];
$pass = $_POST['pass'];


$sql = "SELECT * FROM login where username='$user' AND pass='$pass'";

$result = $conn->query($sql);

if(!$raw = $result->fetch_assoc()){
	$_SESSION['user'] = "Your username or password is incorrect!";
}else{
	$_SESSION['user'] = $raw['username'];
	header("Location: userpanel.php");
}



