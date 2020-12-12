<?php

require ('helper.php');
// error variable
$error = array();

$firstName = validate_input_text($_POST['firstName']);
if(empty($firstName)){
    $error[]="you forgot to enter the First name";
}
$lastName = validate_input_text($_POST['lastName']);
if(empty($lastName)){
    $error[]="you forgot to enter the Last name";
}
$email = validate_input_email($_POST['email']);
if(empty($email)){
    $error[]="you forgot to enter the Email";
}
$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if(empty($confirm_pwd)){
    $error[]="you forgot to enter the Confirm Password";
}
if(empty($error)){
    echo 'validate';
}else{
    echo 'not validate';
}

?>