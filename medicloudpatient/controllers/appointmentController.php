<?php
//session_start();
require 'config.php';

// if user clicks on register button
$errors= array();

$name="";
$email= "";
$aadhar="";
$password= "";
$hospname= "";
$date="";

    if(isset($_POST['signup-btn'])){
       
        $name= $_POST['name'];
        $aadhar= $_POST['aadhar'];
        $hospname= $_POST['hospitalname'];
        $date= $_POST['date'];
        
       
        
        if(empty($name)){
            $errors['name']= "Name is required";

        }
        if(empty($date)){
            $errors['date']= "Date is required";

        }
        if(empty($hospname)){
            $errors['hospname']= "Hospital name is required";

        }
        if(empty($aadhar)){
            $errors['aadhar']= "Aadhar is required";

        }
        

        

        

        if(strlen($aadhar)!=12){
            $errors['aadhar']="Aadhar length must be 12";
        }

        


        if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
            $errors['name']="Name must be letters only";
        }

        if(!preg_match('/^[0-9]+$/',$aadhar)){
            $errors['aadhar']="Aadhar must be numbers only";
        }
        

        

        

        if(count($errors)===0){
            
            $insert = "INSERT INTO appoinment(hospname,name,aadhar,date) VALUES ('$hospname','$name','$aadhar','$date')";
        if($conn-> query($insert)===TRUE){
            $_SESSION['message']= "Your appointment has been scheduled";
            $_SESSION['alert-class']= 'alert-success';
            header('location: appoinmentconf.php');
            exit();
        }
        else{
            $errors['email']=  'Database error';
        }
        

        }

    }

    