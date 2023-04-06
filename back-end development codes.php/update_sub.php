<?php
include "config.php";

if(isset($_POST['submit'])){
    $id=$_POST['id']; 
    $Pupils =$_POST['Pupils'];
    $Parents =$_POST['Parents'];
    $Pupils_Parents =$_POST['Pupils_Parents'];
    $Classes=$_POST['Classes'];
    $Teachers=$_POST['Teachers'];
    $checked_count = count($_POST['check']);
        foreach($_POST['check'] as $selected) {
            //echo "<p>".$selected ."</p>";
            $check = implode(",",$_POST['check']);
        }
    

    $sql="UPDATE student SET Pupils ='$Pupils ', Parents ='$Parents' , 
    Pupils_Parents =  '$Pupils_Parents', Classes='$Classes', Teachers='$Teachers',Where id =$id";
    //echo $sql;
    
}
?>

    /*$res=mysqli_query($conn,$sql);
    if($res)
    {
        echo"Record is updated";
    
    }
    else{
        echo "HuHhHh!! ErRrOr".mysqli_error($conn);
    }*/
