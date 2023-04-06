<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rishton_academy";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("connection not setup:".mysqli_connect_error());
}
else{
    echo "Connected Successfully.";
}

$Pupils = $_POST['Pupils'];
$Parents = $_POST['Parents'];
$Pupil_Parents = $_POST['Pupil_Parents'];
$Classess= $_POST['Classess'];
$Teachers= $_POST['Teachers'];
$sql="INSERT INTO rishton_academy VALUES ('$Pupils','$Parents','$Pupil_Parents','$Classess','$Teachers')";

if(mysqli_query($conn,$sql))
 {
    echo ("<br>\n $Pupils <br> \n $Parents <br>  \n $Pupil_Parents<br> \n $Classess<br> \n $Teachers<br>");
 }
 else{
     echo "HuHhHh!! ErRrOr".mysqli_error($conn);
 }
if(isset($_POST['submit'])){
    if(!empty($_POST['Classess'])) {
        
    } else {
        echo 'Please select the value.';
    }
}
if(isset($_POST['submit'])){
    if(!empty($_POST['check'])) {
    
    $checked_count = count($_POST['check']);
    echo "You have selected following ".$checked_count." option(s): <br/>";
    
    foreach($_POST['check'] as $selected) {
    echo "<p>".$selected ."</p>";
    }
    
    }
}
mysqli_close($conn);
?>