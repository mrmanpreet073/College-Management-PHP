<?php
session_start();
include('../dbcon.php');

$rollno = $_GET['rollno'];

$sql = "DELETE FROM student WHERE rollno = '$rollno'";
$run = mysqli_query($con, $sql);

if ($run) {
    $_SESSION['flash'] = [
        'type' => 'success',
        'message' => 'Student deleted successfully!'
    ];
} else {
    $_SESSION['flash'] = [
        'type' => 'error',
        'message' => 'Failed to delete student.'
    ];
}

header('Location: updatestudent.php'); // Change to your correct file name
exit();
?>
