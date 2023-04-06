<?php
include"config.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="DELETE FROM student WHERE id ='$id'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        echo" Data deleted";
    }
    else{
        echo "HuHhHh!! ErRrOr".mysqli_error($conn);
    }
}
?>