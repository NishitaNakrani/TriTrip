<?php

$server = "localhost";
$username = "root";
$password = "";

$con = new mysqli($server,$username,$password);

if($con->connect_error){
	die("Server internal error...");//echo "Connection error...<br/>";
}

$con->select_db("6td1project");

?>