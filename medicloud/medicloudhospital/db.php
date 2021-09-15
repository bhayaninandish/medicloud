<?php

$conn = new mysqli("localhost","nandish","password","hospital");

if($conn->connect_error){
    die('Database error'. $conn->connect_error);
}