<?php 
session_start();

$firstName = $lastName  = $email  = $phoneNumber = $message = '';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = test_input($_POST['firstName']);
    $lastName = test_input($_POST['lastName']);
    $email = test_input($_POST['email']);
    $phoneNumber = test_input($_POST['phoneNumber']);
    $message = test_input($_POST['message']);
    $name = "$firstName $lastName";
    $to = "bishu01mail@gmail.com";
    $subject = "Mail From site derekbennington.com";
    $eMsg = "Name =".$name."\r\n  Email = ".$email."\r\n  Phone Number = ".$phoneNumber."\r\n  Message = ".$message;
    $headers = "From: noreplay@derekbennington.com";

    if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phoneNumber) && !empty($message)){
        if($email!=NULL){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION["errorMsg"] = "Please fill out the right Email address";
            }else{
                mail($to,$subject,$eMsg,$headers);
                header("Location:thankyou.php");
            }
        }
    }else{
        $_SESSION["errorMsg"] = "Please fill out this filed";
    }
    
}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}