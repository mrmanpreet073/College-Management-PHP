<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header('location:../login.php');
    exit();
}

$username = $_SESSION['username'];
?>
<?php
if (isset($_SESSION['flash'])) {
    $type = $_SESSION['flash']['type'];
    $msg = $_SESSION['flash']['message'];

    // Choose color based on type
    $color = ($type === 'success') ? 'green' : 'red';

    echo "<div style='text-align:center; color: $color; font-weight: bold; padding: 10px;'>$msg</div>";

    unset($_SESSION['flash']); // Clear flash message
}
?>



<style>

*{
    margin: 0;
    padding: 0;
    /* box-sizing: border-box; */
    font-family: "Poppins", serif;
    /* font-family: 'Roboto', sans-serif; */
}
       body{
        /* background :url("abstract-geometric-wireframe-background_52683-59421.avif");
        background-size: cover; */
        
    }
       .head{
        border-radius: 20px;
        margin-top: 10px;
        background-color: rgba(0, 0, 0, 0.63);
        color: white;
        text-align: center;
        padding: 10px;
        line-height: 5px;
        height: 50px;
    }
    .logout a{ 
        color: black;
        text-decoration: none;
        padding: 10px  10px ;
        border-radius: 5px;
        /* margin-bottom: 5px; */
    }
    .logout a:hover{
        background-color: rgba(215, 32, 32, 0.63);
        color: white;
        transition: 0.5s;
    }
    tr{
        text-align: center;
    }
    .form{
        margin-top: 1%;
    }
    h1{
        text-align: center;
    }
    h2{
        text-align: center;
        color: rgba(0, 27, 65, 0.88);
        border-bottom: 1px solid rgba(0, 27, 65, 0.88);
        width: 30%;
        margin-left: 35%;
        margin-bottom: 20px;
        /* padding: 10px; */

        /* background: rgba(0, 27, 65, 0.88); */

    }
    .form{
        /* 
        margin-right: 30%;
        background-color: rgba(100, 148, 237, 0.184);
        padding: 30px;
        border-top: 5px solid cornflowerblue;
        border-bottom: 5px solid cornflowerblue;
        box-shadow: 0 0 20px rgba(128, 128, 128, 0.75);
       
         */
        text-align: center;
        
        align-items: center;
    }
    table {
    width: 85%;
    border-collapse: collapse;
    /* margin: 20px 0; */
    background-color: white;
    margin-left: 7.5%;
    align: center;
}

table th, table td {
    padding: 10px;
    text-align: left;
}
table th{
    border-right: 0.5px solid white;
}
table tr {
    border-bottom: 1px solid rgba(0, 27, 65, 0.88);
}
/* .button{
    background-color: rgba(0, 0, 0, 0.63);
    margin-right: 85%;
    height: 40px;
    
    
} */
.button a{
    color: black;
    text-decoration: none;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.88);
    padding: 10px ;
    /* height: 50px; */
    text-align: center;
    border-radius: 5px;
    margin-left: 7.5%;
    border: 1px solid  rgba(0, 0, 0, 0.63);
}
.button a:hover{
    background: rgba(0, 27, 65, 0.88);
    color: white;
    transition: 0.3s;
}
nav h3{
    margin-left: 250px;
}
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* padding: 20px 10%; */
    padding: 15px 5%;
    background: rgb(0, 27, 65);
}
.nav-logo {
    height: 50px;
    border-radius: 50%;
    /* margin-left: 5%; */
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li {
    position: relative;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-weight: 500;
    padding: 8px 12px;
    border-radius: 5px;
    transition: background 0.3s;
}

nav ul li a:hover {
    background: rgba(255, 255, 255, 0.2);
}

.menu-btn {
    display: none;
    font-size: 24px;
    cursor: pointer;
    color: white;
}

.menu-btn i.fa-times {
    display: none;
}

#click {
    display: none;
}

#click:checked ~ .menu-btn i.fa-bars {
    display: none;
}

#click:checked ~ .menu-btn i.fa-times {
    display: block;
}

#click:checked ~ ul {
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 60px;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.9);
}

@media (max-width: 768px) {
    .menu-btn {
        display: block;
    }


    nav ul {
        display: none;
        flex-direction: column;
        width: 100%;
        text-align: center;
        background-color: aqua;

    }

    nav ul li {

        width: 100%;
    }

    nav ul li a {
        display: block;
        padding: 10px;

    }
    .text-box {
    margin-top:20%;

    }
    .text-box p {
        display: none;
    }
}
.formmm{
   margin-top: 4%;
}
#submit{
    width: 130px;
  
    font-weight: 600;
    height: 30px;
    border:1px solid black;
    background-color:rgba(255, 255, 255, 0.07);
    border-radius:5px ;
}
#submit:hover{
    background: rgba(0, 27, 65, 0.88);
    color:white;
    transition:0.3s;
}
.flash-message {
    margin: 10px auto;
    width: 60%;
    padding: 10px;
    border-radius: 5px;
    font-weight: bold;
    text-align: center;
}
.flash-success {
    background-color: #d4edda;
    color: #155724;
}
.flash-error {
    background-color: #f8d7da;
    color: #721c24;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav>
<img src="WhatsApp Image 2025-01-29 at 17.51.25_bff2d5e5.jpg" alt="logo" class="nav-logo">

            <h3 style="color: aliceblue;">ADMIN DASHBOARD</h3>
            <!-- <h2>Admin Dashbord</h2> -->
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fa fa-bars"></i>
                <i class="fa fa-times"></i>
            </label>
            <ul>
       
                <li><a href="../index.php">HOME</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
         
              
                <li  style="color: white; padding: 5px 5px; list-style: none; font-size: 13px; font-weight: 600; cursor: default; display: flex; align-items: center; gap: 5px;  color: rgb(0, 255, 162);  ">
                <i class="fa-solid fa-user" ></i>
         <?php echo htmlspecialchars($username); ?>
    </li>
            </ul>


        </nav>

    <div class="formmm">
    <h2>Student Detail</h2>
    <div class="form">
    <form action="updatestudent.php" method="post">
        <lable for="standard">Enter Stream :</lable>
        <input type="text" name="standered" recquired>
<br>
<br>
        <lable for="studentname">Enter Student Name :</lable>
        <input type="text" name="studentname" recquired>
        <br>
        <br>
        <input type="submit" value="submit" name="submit" id="submit" >
    </form>
    </div>
    </div>
    <div class="button">
        <a href="addstudent.php">Add New</a>
    </div>
 <table align="center" width="90%"  style="margin-top:20px;">
<tr style="    background: rgba(0, 27, 65, 0.88);
;color:white;" style="padding:10px;">
    <th>NO.</th>
    <th>Image</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Stream</th>
    <th>EDIT</th>
    <th ></th>
</tr>
 <?php

if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $standard=$_POST['standered'];
    $name=$_POST['studentname'];

    $sql="SELECT * FROM `student` WHERE `stream`='$standard' AND `name` LIKE '%$name%'";
    $run=mysqli_query($con,$sql);

  if(mysqli_num_rows($run)<1)
  {
    echo "<tr><td colspan='5'> NO Record found </td></tr>";
  }
  else{
    $count=0;
    while($data=mysqli_fetch_assoc($run))
    { 
        $count++;
        ?>
        <tr>
            <td><?php echo $count ?></td>
            <td><img src="../dataimages/<?php echo $data['image']; ?>" style="max-width:100px" ></td>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['rollno'] ?></td>
            <td><?php echo $data['stream'] ?></td>
            <td><a href="updateform.php?rollno=<?php  echo $data['rollno']; ?>"><i class="fa-solid fa-pen-to-square" style="color:rgba(0, 27, 65, 0.88);"></i></i></a></td>
            <td><a href="deletestudent.php?rollno=<?php  echo $data['rollno']; ?>"><i class="fa-solid fa-trash" style="color:rgba(0, 27, 65, 0.88);"></i></a></td>
            

        </tr>
        
        <?php

    }
  }
  
}
?>
<!-- <h1>asdfghjk</h1> -->
 </table>
</body>
</html>

