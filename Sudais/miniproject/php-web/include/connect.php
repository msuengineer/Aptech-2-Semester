<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "sharjlahmd";

$conn = new mysqli (
    $serverName, $userName, $password, $db_name
);

if( $conn->connect_error){
    die($conn->connect_error);
}
