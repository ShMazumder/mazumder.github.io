<?php

// if "email" variable is filled out, send email
if (isset($_POST['email'])) {

    //Email information
    $to = $_POST['email'];
    $email = "hello@shmazumder.online"; //$_REQUEST['email'];
    $subject = "Greetings!"; //$_REQUEST['subject'];
    $message = "Hi there, Hope you are doing well."; //$_REQUEST['message'];

    //Send email
    mail($to, $subject, $message, "From:" . $email);

    //Email response
    echo "Thank you! A email will be sent to you soon!";
} else {
    echo "Oops! Something went south...";
}
