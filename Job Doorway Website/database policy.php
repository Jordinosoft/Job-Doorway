<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "privacy_policy";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if(!$conn){
    die("Something went wrong;");
}
?>