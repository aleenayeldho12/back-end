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

?>
