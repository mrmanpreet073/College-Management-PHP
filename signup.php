<?php 
session_start();
if(isset($_SESSION['uid']))
{
   header('location:admin/updatestudent.php');
}

$signupError = ""; // error message for UI
$signupSuccess = ""; //  success message

?>
 <?php

include('dbcon.php');

if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    // Check if user already exists
    $check_qry = "SELECT * FROM `admin` WHERE `username` = '$username'";
    $check_run = mysqli_query($con, $check_qry);

    if (mysqli_num_rows($check_run) > 0) {
        $signupError = "Account already exists!";
    } else {
        $qry = "INSERT INTO `admin` (`username`, `password`) VALUES ('$username', '$password')";
        $run = mysqli_query($con, $qry);

        if ($run) {
            $signupSuccess = "Account created successfully! Redirecting to login...";
            // Auto redirect after 3 seconds
            header("refresh:3;url=login.php");
        } else {
            $signupError = "Error occurred while signing up.";
        }
        
    }
}
?>
<style>
      * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* background-color:rgba(11, 149, 247, 0.77); */
            
        }
        input{
    background-color: rgba(255, 255, 255, 0.53);
}
        .bodyy{
            background :url("padlock-with-keyhole-icon-personal-data-security-illustrates-cyber-data-information-privacy-idea-blue-color-abstract-hi-speed-internet-technology_542466-600.avif");

            background-size: cover;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.29);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            color: white;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            width: 100%;
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0056b3;
        }

        @media (max-width: 500px) {
            .form-container {
                padding: 15px;
            }
        }
        /* body{
        background :url("2_49_s.jpg");
        background-size: cover;
    }
        .form{
            color: white;
        margin-left: 30%;
        margin-right: 30%;
        background-color: rgba(28, 29, 30, 0.52);
        padding: 30px;
        border-top: 5px solid red;
        border-bottom: 5px solid red;
        box-shadow: 0 0 20px rgba(128, 128, 128, 0.75);
        align-items: center;
        text-align: center;
        border-radius: 20px;
    } */
    h1{
        text-align: center;
        color: white;
    }
    .link{
        margin-bottom: 20px;

    }
    .linkk{
        text-align: center;
        text-decoration: none;
        color:rgb(101, 176, 255);
       
    }
    .error-box {
    background-color: #ff4d4d;
    color: white;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
.success-box {
    background-color: #28a745;
    color: white;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}


</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <div class="bodyy">
<div class="form-container">
        <h2>Sign Up</h2>
        <?php if (!empty($signupError)): ?>
    <div class="error-box"><?php echo $signupError; ?></div>
<?php endif; ?>
<?php if (!empty($signupSuccess)): ?>
    <div class="success-box"><?php echo $signupSuccess; ?></div>
<?php endif; ?>


        <form method="post" action="signup.php">
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" id="name" name="uname" required>
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" id="email" name="pass" required>
            </div>
            <div class="link">
                <p>Already Have an account ? <a href="login.php" class="linkk">Login</a></p>
               
            </div>
            <button type="submit" name="submit" value="login">Submit</button>
        </form>
    </div>
   



    </div>
</body>
</html>