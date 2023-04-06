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
                width:30%;
                background-color:darkseagreen;
                cursor:pointer;
               
            }
           </style>
           </head>
           <body>
               <h2> Student Data</h2>
                <diV class="container">
                   <form action="update_sub.php" method="post" >
                       
                       <label>PupiParents:</label><br>
                       <input type="text" class="text" name="Pupil" placeholder="Enter your name"><br>
                       <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"><br>
                       
                       <label>ParentsName:</label><br>
                       <input type ="text" class="text" name="Parents" placeholder="Enter your Parents Name"><br>
                       <label>Classes:</label><br>
                       <input type ="text" class="text" name="Classes" placeholder="Enter your Class Name"><br>
                       <label>Teachers:</label><br>
                       <input type ="text" class="text" name="Teachers" placeholder="Enter your Teachers Name"><br>

                        </select><br>
                        <input type="submit" value="submit" name="submit"><br>
                       
        </form>
        </div>
        </body>
        </html>
    
        
        