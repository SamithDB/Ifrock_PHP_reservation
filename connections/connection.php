<?php

$conn = mysqli_connect("localhost", "root", "", "ifrock");


if(!$conn){
    die("connection failed: ".  mysqli_connect_error());
}