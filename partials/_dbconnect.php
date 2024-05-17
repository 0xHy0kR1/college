<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "health";

$connection = mysqli_connect($servername, $username, $password, $database);


// Die if connection was not successful
if(!$connection){
    die("Sorry we failed to connect: ". mysqli_connect_error($connection));
}

echo "Connection established";
?>