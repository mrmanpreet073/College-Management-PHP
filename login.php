<?php 
session_start();
if(isset($_SESSION['uid']))
{
   header('location:admin/updatestudent.php');
}


?>
 <?php
include('dbcon.php');
$loginError = ""; 

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run = mysqli_query($con, $qry);
    $row = mysqli_num_rows($run);

    if ($row < 1) {
        $loginError = "Username or Password not matched!";
    } else {
        $data = mysqli_fetch_assoc($run);
        $_SESSION['uid'] = $data['id'];
        $_SESSION['username'] = $username;
        header('location:admin/updatestudent.php');
        exit();
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
            background-color:rgba(11, 149, 247, 0.77);
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

input{
    background-color: rgba(255, 255, 255, 0.53);
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
        <h2>Admin Login</h2>
        <?php if (!empty($loginError)): ?>
    <div class="error-box"><?php echo $loginError; ?></div>
<?php endif; ?>

        <form method="post" action="login.php">
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" id="name" name="uname" required>
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" id="email" name="pass" required>
            </div>
            <div class="link">
                <p>Not a member ? <a href="signup.php" class="linkk">Sign Up</a></p>
               
            </div>
            <button type="submit" name="login" value="login">Submit</button>
        </form>
    </div>
   
    </div>
</body>
</html>