<?php
$host="localhost";
$username="root";
$password="";

// userdefined
$dbname="test";

$con=mysqli_connect($host, $username, $password, $dbname);

if(!$con){
    echo "Not connected";
}
else{
    echo "Connected";
}


?>