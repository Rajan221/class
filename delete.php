<?php

include("db/connect.php");

$msg="";

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM data where sn='$id'";

    if(mysqli_query($con, $query)){
        $msg="Deleted Successfully";
    }
    else{
        $msg="Error Occured".mysqli_error($con);
    }
}
else{
    $msg="No Action";
}

header("Location:view.php?msg=".$msg);


?>