<?php
include "config.php";
       if(isset($_POST['submit'])){
        
        $Pupils = $_POST['Pupils'];
        $Parents = $_POST['Parents'];
        $Classes= $_POST['Classes'];
        $Teachers=$_POST['Teachers'];
        $checked_count = count($_POST['check']);
        foreach($_POST['check'] as $selected) {
            //echo "<p>".$selected ."</p>";
            $check = implode(",",$_POST['check']);
    
  
    

$sql="INSERT INTO student (Pupils,Parents,Classes,Teachers,) VALUES ('$Pupils','$Parents','$Classes','$Teacher')";
            
               if(mysqli_query($conn,$sql))
                   {
                     echo"Data inserted successfully!!";
                   }
             else{
                echo "HuHhHh!! ErRrOr".mysqli_error($conn);
            }
             mysqli_close($conn);
        }  
    }      
?>
<html>
<head>
       <title>Student database</title>
       <style>
           body{
               background-color:#C0C0C0;
           }
        .container
        {
            background-color:#FFF0F5;
            padding:50px 10px 20px 40px;
            width:45%;
            height:60%;
            margin-left:25%;
            font-family:"Lucida Console", "Courier New", monospace;
            font-size: 15px;
        
            
            
        }
        .txt
        {
            width:90%;
            height:9%;
            border:1px solid brown;
            padding:20px 15px 20px 15px;
            margin:10px 0px 15px 0px;
            font-family:"Lucida Console", "Courier New", monospace;
            font-size: 10px;
        
           

            
        }
        select
           {
               width:90%;
               border:1px solid brown;
               padding:10px 15px 10px 15px;
           }
           h2{
               text-align:center;
               letter-spacing: 2px;
               text-shadow:2px 2px 5px aliceblue;
           }
           input[type=text]:focus{
               width:50%;
               padding:10px 15px;
               background-color:lightseagreen;
               border:none;
               border-radius:4px;
               cursor:pointer;
               
               
            }
            input[type=submit]{
                width:40%;
                background-color:darkseagreen;
                cursor:pointer;
               
            }
           </style>
           </head>
           <body>
               <h2> Student Data</h2>
                <diV class="container">
                   <form action="view.php" method="post" >
                       
                    <label>PupilsName:</label><br>
                       <input type="text" class="text" name="Pupils" placeholder="Enter your name"><br>
                       <input type="hidden" name="id"><br>
                       
                       <label>ParentName:</label><br>
                       <input type ="text" class="text" name="Parents" placeholder="Enter your Parents Name"><br>
                
                       <label>Classes:</label><br>
                       <input type ="text" class="text" name="Classes" placeholder="Enter your Class Name"><br>
                       <br>
                       <label>Teachers:</label><br>
                       <input type ="text" class="text" name="Teachers" placeholder="Enter your Teachers Name"><br>

                        </select><br>
                        <input type="submit" value="submit"><br>
                       
        </form>
        </div>
        </body>
        </html>

        