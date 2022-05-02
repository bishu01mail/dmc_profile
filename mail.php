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
    $subject = "Mail from derekbennington.com";
    $eMsg = "Name <span>:</span> ".$name."\r\nEmail : ".$email."\r\nPhone : ".$phoneNumber."\r\nMessage : ".$message;
    $headers = "From: noreplay@derekbennington.com"; 

    if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phoneNumber) && !empty($message)){
        
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION["errorMsg"] = "Please fill out the right Email address";
            }
            elseif(!filter_var($phoneNumber, FILTER_SANITIZE_NUMBER_INT)){
                $_SESSION["errorMsg"] = "Please fill out the right phone number";
            }
            else{
                if($email!=NULL){
                    mail($to,$subject,$eMsg,$headers);
                    $_SESSION["thankYouMsg"] = "Thanks for being awesome! I have received your message and would like to thank you for writing to me";
                    header("Location:/");
                }
            }
        
    }else{
        $_SESSION["errorMsg"] = "Please fill out this filed";
        header("Location:/");
    }
    
}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}