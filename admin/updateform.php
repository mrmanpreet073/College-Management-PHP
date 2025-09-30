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

include('../dbcon.php');

$roll=$_GET['rollno'];
$sql="SELECT * FROM `student` WHERE `rollno`='$roll'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);

$success = false;
if (isset($_GET['updated']) && $_GET['updated'] == 1) {
    $success = true;
}

?>

<?php
$success = false;
if (isset($_GET['updated']) && $_GET['updated'] == 1) {
    $success = true;
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
        
    }
    .bodyy{
            background :url("gradient-background-simple-light-blue-and-black-vector-46737815.jpg");

            background-size: cover;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
       .head{
        border-radius: 20px;
        margin-top: 10px;
        background-color: lightblue;
        color: blue;
        text-align: center;
        padding: 10px;
        line-height: 5px;
        height: 50px;
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
        color: rgb(0, 0, 0);;
    }
    /* .form{
        margin-left: 30%;
        margin-right: 30%;
        background-color: rgba(100, 148, 237, 0.184);
        padding: 30px;
        border-top: 5px solid cornflowerblue;
        border-bottom: 5px solid cornflowerblue;
        box-shadow: 0 0 20px rgba(128, 128, 128, 0.75);
        align-items: center;
        text-align: center;
        border-radius: 20px;
    } */
    nav h3{
    margin-left: 10px;
}
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 10%;
    background: rgb(0, 27, 65);
}
.nav-logo {
    height: 50px;
    border-radius: 50%;
    margin-right: 20%;
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
table{
    margin-left:35%;
    margin-top: 2%;
}
table tr td{
    padding:5px;
}
input{
    width: 220px;
}
#submit{
    width:150px;
    border:1px solid black;
    
    background-color:rgba(14, 13, 13, 0.71);
    color:white;
    border-radius:5px ;
    margin-top: 3%;
    
}
#submit:hover{
    background-color:rgba(255, 251, 251, 0.76);
    color:black;
    transition:0.3s;
}
.all{
    margin-top: 3%;
}
.all p{
    color:rgba(14, 13, 13, 0.5);
}
body{
        background-color:rgba(49, 141, 246, 0.69);
        font-family: Arial, Helvetica, sans-serif;
    }
    .containerr{
        border: 0.5px solid black;
        max-width: 450px;
        width: 100%;
        background-color: white;
        margin: 20px auto;
        padding: 30px;
        box-shadow: 0 0 30px rgba(255, 255, 255, 0.18);
        margin-bottom: 65px;
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.43);    }
    .containerr .title{
        font-size: 30px;
        font-weight: 500;
        margin-bottom: 20px;
        /* color: #333; */
        /* color: rgba(14, 105, 232, 0.8); */
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.8);
        color:white;

    }
    .containerr .formm .inputfeild{
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        /* color:white; */
    }
    .containerr .formm .inputfeild lable{
        width: 200px;
        color: #333;
        margin-right: 10px;
        font-size: 18px;
        color:white;
    }
    .containerr .formm .inputfeild input{
        width: 100%;
        outline: none;
        border:1px solid rgba(255, 255, 255, 0);
         font-size: 17px;
            padding: 8px;
            border-radius: 5px;
            transition:  all 0.3s;
            background-color: rgba(255, 255, 255, 0.62);

    }
    .containerr .formm .inputfeild .selectbox{
        width: 100%;
        outline: none;
        border:1px solid rgba(49, 141, 246, 0);
         font-size: 17px;
            padding: 8px;
            border-radius: 5px;
            transition:  all 0.3s;
            background-color: rgba(255, 255, 255, 0.62);

    }
    .containerr .formm .inputfeild input:focus{
        /* border-color: rgb(245, 100, 10); */
        background-color: white;
    }
    .containerr .formm .inputfeild .selectbox:focus{
        /* border-color: rgb(245, 100, 10); */
        background-color: white;
    }
    /* .container .form .inputfeild button{
        width: 100%;
        padding: 10px 10px;
        font-size: 18px;
        border: none;
        background-color: rgba(14, 105, 232, 0.8);
        color: white;
        cursor: pointer;
        border-radius: 8px;
        transition: all 0.3s;


    } */
    #submit{
        width: 100%;
        padding: 10px 10px;
        font-size: 18px;
        border: none;
        background-color: rgba(14, 105, 232, 0.8);
        color: white;
        cursor: pointer;
        border-radius: 8px;
        transition: all 0.3s;
    /* width:150px;
    background-color:rgba(5, 160, 250, 0.98);
    color:white;
    border-radius:5px ;
    border:0.5px solid black;
    padding:5px;
    width: 80%; */
    
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    
<nav>
            <h3 style="color: aliceblue;">ADMIN DASHBOARD</h3>
            <img src="WhatsApp Image 2025-01-29 at 17.51.25_bff2d5e5.jpg" alt="logo" class="nav-logo">
            <!-- <h2>Admin Dashbord</h2> -->
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fa fa-bars"></i>
                <i class="fa fa-times"></i>
            </label>
            <ul>
                <li><a href="../index.php">HOME</a></li>
                     <li><a href="updatestudent.php">ADMIN </a></li>
                <li><a href="logout.php">LOGOUT</a></li>
           
                <!-- <li><a href="login.php">ADMIN </a></li> -->
            </ul>
        </nav>
<!-- <div class="head">
<h3><a href="logout.php" style="float:right">Logout</a></h3>
<h3><a href="admindash.php" style="float:left">Back</a></h3>
    <h1>Welcome To Admin Dashbord</h1>
    
    </div> -->
<div class="bodyy">
<!-- <?php if ($success): ?>
    <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px; text-align: center; margin: 20px auto; max-width: 450px;">
        ✅ Student updated successfully!
    </div>
<?php endif; ?> -->

    <div class="containerr">
    <?php if ($success): ?>
    <div style="background-color: #d4edda; color: #155724; padding: 10px 15px; border: 1px solid #c3e6cb; border-radius: 6px; margin-bottom: 15px; text-align: center;">
    ✅ Data Updated Successfully!
    </div>
<?php endif; ?>

    <form action="updatedata.php" method="post" enctype="multipart/form-data">

        <div class="title">
        UPDATE STUDENT
        </div>
        <div class="formm">
        <div class="inputfeild">
                <lable> Roll No.</lable>
                <input type="number" name=roll value=<?php echo$data['rollno'] ?> readonly>
            </div>
            <div class="inputfeild">
                <lable> Name</lable>
                <input type="text" name=name required value=<?php echo$data['name'] ?>  >
            </div>
            <div class="inputfeild">
                <lable>City</lable>
                <input type="text" name=city required  value=<?php echo$data['city'] ?>>
            </div>
            <div class="inputfeild">
                <lable>Contact no.</lable>
                <input type="text" name="cno" required pattern="\d{10}" maxlength="10" title="Enter a 10-digit phone number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required value=<?php echo$data['pcont'] ?>>
            </div>
            <div class="inputfeild">
                <lable>Stream</lable>
                <input type="text" class="selectbox" id="stream" name=std required value=<?php echo$data['stream'] ?> >
              
                </select>
           </div>
            <div class="inputfeild">
                <lable>Image</lable>
                <input type="file" name=simg required>
            </div>
            <div class="inputfeild">
                <input type="submit" class="btn" name=submit id="submit" value="UPDATE">
           </div>
        </div>
    </div>
    </form>
    </div>
</body>
</html>