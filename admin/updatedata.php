<?php
include('../dbcon.php');
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

    $qry="UPDATE `student` SET `name`='$name',`city`='$city',`pcont`='$cno',`stream`='$std',`image`='$imagename' WHERE `rollno`='$rollno'";
    $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
        <script>
            //alert('Data Updated Successfully');
            window.open('updateform.php?rollno=<?php echo $rollno;?>&updated=1', '_self');

        </script>
        <?php
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