<?php
session_start();

echo "Please wait you are logging out";
header('location:\Codelearners\courses.php');
session_destroy();
    

?>