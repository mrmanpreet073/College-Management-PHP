<?php 
session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
 header('location:../login.php');
}

?>
<style>
    body{
        /* background :url("abstract-geometric-wireframe-background_52683-59421.avif"); */
        /* background-size: cover; */
    }
    .head{
        /* border-radius: 20px; */
        margin-top: 10px;
        background-color: rgba(0, 0, 0, 0.48);
        color: White;
        text-align: center;
        padding: 10px;
        line-height: 5px;
        height: 50px;
    }
    .h1{
       margin-top: 0px;

    }
    .dashbord{
        background-color: lightblue;
        margin-left:35%;
        margin-right: 35%;
        border-radius: 200px;
    }
    .navbar{
        /* background-color: rgba(0, 0, 0, 0.48); */
        /* margin-right: 80%; */
        margin-top:5%;
       
    }
    .navbar ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
       
    }
    .navbar ul li{
        
    margin-left: 30%;
    }
    .navbar ul li a{
        float: left; 
       
        display: block;
        text-decoration: none;
        color: black;
        padding: 14px 20px;
        text-align: center;
        border-radius: 7px;
        background-color: rgba(19, 18, 18, 0.59);
      
    }
    .navbar ul li a:hover{
        background-color: rgba(19, 18, 18, 0.59);
    }
   .table{
    margin-left:30%;
    margin-top: 2%;

   }
   .box{
    flex-basis: 10%;
   }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="head">
    <h1>Welcome To Admin Dashbord</h1>
    </div>
    <!-- <div class="dashbord">
        <table align="center"  style="width:50%; margin-top: 50px;">
            <tr>
                <td align="center"><a href="addstudent.php">INSERT RECORD</a></td>
                
            </tr>
            <tr>
            <td align="center"><a href="updatestudent.php">UPDATE RECORD</a></td>
            </tr>
            <tr>
              <td align="center"><a href="deletestudent.php">DELETE RECORD</a></td>
            </tr>
        </table>
    </div> -->

  <div class="navbar">
        <nav>
            <ul>
                <li><a href="addstudent.php">INSERT RECORD</a></li>
                <li><a href="updatestudent.php">UPDATE RECORD</a></li>
                <li><a href="deletestudent.php">DELETE RECORD</a></li>
            </ul>
        </nav>
        </div>
    <div class="table">
    <table align="center" width="80%"  style="margin-top:20px;">
<tr border="1" style="background-color:blue;color:white;">
    <th>NO.</th>
    <th>Image</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Edit</th>
</tr>
    </div>


 
</body>
</html>