<?php
// first-question: yes
// name: Shazzad Hossain Mazumder
// multi[]: Rock
// multi[]: Pop
// multi[]: Country
// multi[]: Classic
// programmer: yes
// email: shmazumder23@gmail.com
// password: 1234

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
    echo "Thank you! An email will be sent to you soon!";
} else {
    echo "Oops! Something went south...";
}
