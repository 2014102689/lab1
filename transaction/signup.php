<?php 
    include_once('../utilities/validation.php');

    $Firstname = $_POST['fname'];
    $Middlename = $_POST['mname'];
    $Lastname = $_POST['lname'];
    $Address = $_POST['address'];
    $DateOfBirth = $_POST['DOB'];
    $PlaceOfBirth = $_POST['POB'];
    //$Gender = $_POST['Gender'];

    if(validate($Firstname,$Middlename,$Lastname,$Address,$DateOfBirth,$PlaceOfBirth)){
        echo "Password is ok";        
    }else{
        echo "Password is not accepted";
    }
?>