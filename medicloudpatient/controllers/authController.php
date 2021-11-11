<?php
//session_start();
require 'config.php';

// if user clicks on register button
$errors= array();

$name="";
$email= "";
$aadhar="";
$password= "";

    if(isset($_POST['signup-btn'])){
       
        $name= $_POST['name'];
        $aadhar= $_POST['aadhar'];
        $email= $_POST['email'];
        $password = $_POST['password'];
        
       
        
        if(empty($name)){
            $errors['name']= "Name is required";

        }
        if(empty($password)){
            $errors['name']= "Password is required";

        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']= "Email address is invalid";
        }
        if(empty($email)){
            $errors['email']= "Email required";

        }

        

        if(strlen($aadhar)!=12){
            $errors['aadhar']="Aadhar length must be 12";
        }

        if(strlen($password)<8){
            $errors['aadhar']="Password must be at least 8 characters";
        }


        if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
            $errors['name']="Name must be letters only";
        }

        if(!preg_match('/^[0-9]+$/',$aadhar)){
            $errors['aadhar']="Aadhar must be numbers only";
        }
        

        $emailQuery= "SELECT * from patient where email=? LIMIT 1";
        $stmt= $conn->prepare($emailQuery);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt -> get_result();
        $userCount = $result->num_rows;
        $stmt->close();

        if($userCount > 0){
            $errors['email']= 'Email already exists';
        }

        if(count($errors)===0){
            
            $insert = "INSERT INTO patient(name,aadhar,email,password) VALUES ('$name','$aadhar','$email','$password')";
        if($conn-> query($insert)===TRUE){
            $_SESSION['message']= "You are now registered";
            $_SESSION['alert-class']= 'alert-success';
            header('location: verified.php');
            exit();
        }
        else{
            $errors['email']=  'Database error';
        }
        

        }

    }

    