<?php

$name = "localhost";
$username = "root";
$password = "";
$dbName = "aupair";
$conn = mysqli_connect($name, $username, $password, $dbName);

if (!$conn){
    echo "connection Failed";
    }
?>