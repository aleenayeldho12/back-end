<html>
<head>
<style>
table
{
    border-style:solid;
    border-width: 4px;
    boredr-color: black;
}
</style>
</head>
<body>
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
$res= "SELECT * FROM rishton_academy";
$res=mysqli_query($conn,$res);
echo'<table>';
echo'<tr>
<td>Pupils </td>
<td>Parents </td>
<td>Pupil_Parents</td>
<td>Classess</td>
<td>Teachers</td>
</tr>';
while($row=mysqli_fetch_array($res))
{
echo '<tr>
<td>'.$row['Pupils '].'</td>
<td>'.$row['Parents '].'</td>
<td>'.$row['Pupil_Parents'].'</td>
<td>'.$row['Classess'].'</td>
<td>'.$row['Teachers'].'</td>
</tr>';
}
echo'</table>';
?>
</body>
</html>