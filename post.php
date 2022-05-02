<?php

$fullname = addslashes(mysqli_real_escape_string($conn, $_POST['fullname']));
$email = addslashes(mysqli_real_escape_string($conn, $_POST['email']));
$phone = addslashes(mysqli_real_escape_string($conn, $_POST['phone']));
$message = addslashes(mysqli_real_escape_string($conn, $_POST['message']));
$category = addslashes(mysqli_real_escape_string($conn, $_POST['category']));



if(!$name || !$email || !$subject || !$message){
    echo 'All information is required';
    exit;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'Enter a valid email';
    exit;
}


$to = 'limanalhassan@yahoo.com';
$subject = 'Contact Form';
 $content = 'Fullname: '.$fullname.'<br>Email: '.$email.'<br>Phone: '.$phone.'<br>Category: '.$category.'<br>Message:<br>'.$message;

mail($to,$content, "From: noreply@capstoneproject.com");


    include('thankyou.html');
    exit;
?>
