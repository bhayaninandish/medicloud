<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    require '../db.php';
    $sql=mysqli_query($conn,"SELECT * FROM individual_clinics where aadhar='$aadhar' and password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["CNAME"] = $row['cname'];
        $_SESSION["NAME"]=$row['name'];
        $_SESSION["AADHAR"]=$row['aadhar'];
        $_SESSION["EMAIL"]=$row['email']; 
        $_SESSION["PASSWORD"]=$row['password']; 
        $_SESSION["ADDRESS"]=$row['address']; 
        header("Location: ../appointment.php"); 
    }
    else
    {
        echo "Invalid Aadhar ID/Password";
    }
}
?>