<?php

include('../form-process.php');
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$msg="";



if($name==''){
    $msg="Name is required";
}
else if($contact==''){
    $msg="Contact is required";
}
else if($email==''){
    $msg="Email is required";
}
else{
$query = "INSERT INTO contact(name,contact,email) VALUES('$name','$contact','$email')";

if(mysqli_query($con, $query)){
    $msg= "Inserted";
}
else{
    $msg= "Error occured".mysqli_error($con);
}
}

echo $msg;
header("Location:../form.php?msg=".$msg);

?>
