<?php
$servername = 'localhost';
$username = 'hmmiyanji'; // 'student' if you use VM provided 
$password= 'rAQTnjMv'; // 'website' if you use VM provided
$dbasename = "hmmiyanji";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbasename);

// Check connection
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
