<?php
$success = false;
if (isset($_GET['success']) && $_GET['success'] == '1') {
    $success = true;
}
?>
<?php
if(isset($_POST['submit']))
{
    include('../dbcon.php');

    $rollno=$_POST['roll'];
    $name=$_POST['name'];   
    $city=$_POST['city'];
    $cno=$_POST['cno'];
    $std=$_POST['std'];
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../dataimages/$imagename");

    $qry="INSERT INTO `student`( `rollno`, `name`, `city`, `pcont`, `stream`,`image`) VALUES ('$rollno','$name','$city','$cno','$std','$imagename')";
    $run=mysqli_query($con,$qry);
    if($run == true)
    {
        header("Location: admission.php?success=1");
        exit();
    }
    
    else
    {
        ?>
        <script>
            alert('Data Insertion Failed');
        </script>
        <?php
    }
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
   
 
   
    h1{

        /* background: rgba(0, 0, 0, 0.13); */
        text-align: center;
    }
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
h1{
    margin-top: 2%;
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
/* @media (max-width: 768px)
{
    table{
        margin-left:10%;
    }
} */
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
/* Footer */
.footer{
    background-color: rgb(42, 38, 38);
   font-weight: 600;
   margin: 10px 0;
   margin-bottom: 0;
}
.footer-col{
    width: 20%;
    padding: 10px 20px;
    line-height: 1.9;

}
.row{
    display: flex;
    flex-wrap: wrap;
    margin: auto;
}

ul{
    list-style: none;
}
.footer-col h4{
    font-size: 18px;
    color: rgb(255, 255, 255);
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;

    
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -8px;
    background-color: rgb(0, 162, 255);
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 10px;
}
.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: rgb(255, 255, 255);
    text-decoration: none;
    font-weight: 300;
    display: block;
    transition: all 0.3s;
}
.footer-col ul li a:hover{
    color: rgb(0, 162, 255);
    padding-left: 8px;
}
.footer-col .social-link a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 0 10px 10px 0;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    color: rgb(255, 255, 255);
    transition: all 0.5s;
}
.footer-col .social-link a:hover{
    background-color: rgb(0, 162, 255);
}

@media(max-width: 700px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
    }
}
/* .formm{
    justify-content:center;
} */
.BSC{
    
}
table tr td{
    border-bottom: 1px solid black;
    /* border-right: 1px solid black;
    border-top: 1px solid black;
    border-left: 1px solid black; */
}
/* pppp  */

body{
        /* background-color:rgba(49, 141, 246, 0.69); */
        font-family: Arial, Helvetica, sans-serif;
    }
    .containerr{
        /* border: 0.5px solid black; */
        max-width: 450px;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.43);
        margin: 20px auto;
        padding: 30px;
        box-shadow: 0 0 30px rgba(255, 255, 255, 0.18);
        margin-bottom: 100px;
        border-radius: 10px;
    }
    .containerr .title{
        font-size: 30px;
        font-weight: 500;
        margin-bottom: 20px;
        /* color: #333; */
        color: rgba(255, 255, 255, 0.97);
        text-align: center;
        border-bottom: 1px solid rgb(255, 255, 255);

    }
    .containerr .formm .inputfeild{
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    .containerr .formm .inputfeild lable{
        width: 200px;
        color: white;
        margin-right: 10px;
        font-size: 18px;
    }
    .containerr .formm .inputfeild input{
        width: 100%;
        outline: none;
        border:1px solid rgba(0, 0, 0, 0);
         font-size: 17px;
            padding: 8px;
            border-radius: 5px;
            transition:  all 0.3s;
            background-color: rgba(255, 255, 255, 0.38);
       
    }
    .containerr .formm .inputfeild .selectbox{
        width: 100%;
        outline: none;
        border:1px solid rgba(49, 141, 246, 0.94);
         font-size: 17px;
            padding: 8px;
            border-radius: 5px;
            transition:  all 0.3s;
            background-color: rgba(255, 255, 255, 0.37);

    }
    .containerr .formm .inputfeild input:focus{
        border-color: rgb(255, 255, 255);
        background-color:white;
    }
    .containerr .formm .inputfeild .selectbox:focus{
        border-color: rgb(255, 255, 255);
        background-color:white;
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
        background-color: rgb(31, 118, 240);
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
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
<nav>
            <h3 style="color: aliceblue;">ADMISSION PORTAL</h3>
            <img src="WhatsApp Image 2025-01-29 at 17.51.25_bff2d5e5.jpg" alt="logo" class="nav-logo">
            <!-- <h2>Admin Dashbord</h2> -->
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fa fa-bars"></i>
                <i class="fa fa-times"></i>
            </label>
            <ul>
                <li><a href="../index.php">HOME</a></li>
                     <li><a href="../login.php">ADMIN </a></li>
                <!-- <li><a href="logout.php">LOGOUT</a></li> -->
           
                <!-- <li><a href="login.php">ADMIN </a></li> -->
            </ul>
        </nav>


    <div class="bodyy">
    <div class="containerr">
    <?php if ($success): ?>
    <div style="background-color: #d4edda; color: #155724; padding: 10px 15px; border-radius: 5px; margin-bottom: 15px; text-align: center; border: 1px solid #c3e6cb;">
         Admission Form Submitted Successfully!
    </div>
<?php endif; ?>

    <form action="admission.php" method="post" enctype="multipart/form-data">

        <div class="title">
        ADDMISSION FORM
        </div>
        <div class="formm">
            <div class="inputfeild">
                <lable> Name</lable>
                <input type="text" name=name required>
            </div>
            <div class="inputfeild">
                <lable>City</lable>
                <input type="text" name=city required>
            </div>
            <div class="inputfeild">
                <lable>Contact no</lable>
                <input type="text" name="cno" required pattern="\d{10}" maxlength="10" title="Enter a 10-digit phone number" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            </div>
            <div class="inputfeild">
                <lable>Stream</lable>
                <select class="selectbox" id="stream" name=std required >
                <option value="" disabled selected>Select Stream</option>

                    <option>BCA</option>
                    <option>BBA</option>
                    <option>BA</option>
                    <option>BCOM</option>
                    <option>MCA</option>
                    <option>MBA</option>
                    <option>MCOM</option>
                
                    
                </select>
           </div>
            <div class="inputfeild">
                <lable>Image</lable>
                <input type="file" name=simg required>
            </div>
            <div class="inputfeild">
                <input type="submit" class="btn" name=submit id="submit" value="Submit">
           </div>
        </div>
    </div>
    </form>
    <br><br><br>
    <!-- footer  -->
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Apply Here </h4>
                    <ul>
                        <li><a href="">Admissions </a></li>
                        <li><a href="">Education Loan</a></li>
                        <li><a href="">Scholarship</a></li>
                        <li><a href="">Admission Office</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Learn Here </h4>
                    <ul>
                        <li><a href="">Organogram</a></li>
                        <li><a href="">Other Committees</a></li>
                        <li><a href="">Pay Fee Online</a></li>
                        <li><a href="">Order Status</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4> Others</h4>
                    <ul>
                        <li><a href="">Courses Fee Details </a></li>
                        <li><a href="">Grievance Redressal Cell</a></li>
                        <li><a href=""> Ombudsperson</a></li>
                        <li><a href="">Procedures And Policies</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4> follow us</h4>
                    <div class="social-link">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-facebook-messenger"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

    </footer>
</body>
</html>
