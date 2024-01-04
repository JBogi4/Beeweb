<?php

$host = "mysql.caesar.elte.hu";
$dbname = "jboglarka4";
$username = "jboglarka4";
$password = "eRX1GybY4FA86hFD";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;