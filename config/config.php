<?php


// $hn = "localhost";
// $un = "alan_admin";
// $pw = "dC3RPzI*H1oC2kdr";
// $db = "my_clyde";


$hn = "localhost";
$un = "alan_admin";
$pw = "_)OperPTkhzG[Yu-";
$db = "myclyde";

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error){
    die("connection failed: " . $db->connect_error );
}


