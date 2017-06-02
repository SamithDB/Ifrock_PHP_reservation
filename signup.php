<?php

session_start();

include 'connection.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$user = $_POST['uname'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$level = "normal";


$sql1 = "INSERT INTO user(fnameuser, lnameuser, emailuser, teluser) VALUES ('$first', '$last' , '$email', '$tel')";

mysqli_query($conn,$sql1);


$id = $conn->insert_id;

$sql2 = "INSERT INTO login(iduser, username, pass, level) VALUES ('$id', '$user' , '$pass1', '$level')";

mysqli_query($conn,$sql2);
mysqli_close($conn);

header("Location: userpanel.php");

