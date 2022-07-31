<?php

$server="localhost";
$user="root";
$password="";
$database="codelearners";

$conn = new mysqli($server, $user, $password,$database);

if (!$conn) {
    echo "Connection not done".mysqli_error($conn);
}



?>