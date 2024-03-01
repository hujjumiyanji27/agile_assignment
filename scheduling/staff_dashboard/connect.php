<?php
$servername = 'localhost';
$username = 'hmmiyanji'; // 'student' if you use VM provided 
$password= 'rAQTnjMv'; // 'website' if you use VM provided
$dbasename = "hmmiyanji";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbasename);

// Check connection
if ($conn->connect_errno) 
{
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
