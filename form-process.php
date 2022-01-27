<?php
$host="localhost";
$username="root";
$password="";
$dbname="rajan";

$con=mysqli_connect($host, $username, $password, $dbname);
if(!$con){
    die("Connection terminated");
    echo "<br>";
}
else{
    echo ("Connection established");
    echo "<br>";
}



?>