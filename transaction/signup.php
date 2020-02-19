<?php 
    include_once('../utilities/validation.php');

    $Firstname = $_POST['fname'];
    $Lastname = $_POST['lname'];
    $Middlename = $_POST['Midname'];

    if(validate($password, $repassword)){
        echo "Password is ok";        
    }else{
        echo "Password is not accepted";
    }
?>