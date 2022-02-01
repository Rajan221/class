<?php
include('db/connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$course_enroll=$_POST['course_enroll'];
$msg="";

$query="INSERT INTO data(username, contact, email, address, course_enroll) VALUES('$name','$contact','$email','$address','$course_enroll')";

if(mysqli_query($con, $query)){
    $msg= "Success";
}
else{
    $msg=  "Error occured".mysqli_error;
}

header("Location:form.php?msg=".$msg);

?>