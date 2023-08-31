<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "aec_project";


//Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
}

function redirect($to) {
    header('Location '.$to);
}