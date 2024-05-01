<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "books_data";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>