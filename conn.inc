<?php
date_default_timezone_set('Asia/Calcutta');

// --------- for localhost 
$db_name       = "portfolio_db";
$servername    = "localhost";
$username      = "root";
$password      = "";

 
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);


// Check connection
if ($conn->connect_error) {
    die("Connection failed  : " . $conn->connect_error);
 echo "Unable to connect";
} 

//  end
?>