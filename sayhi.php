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

$sent = false;
// if "email" variable is filled out, send email
if (isset($_POST['email'])) {

    //Email information
    $to = $_POST['email'];
    $name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : "";
    $programmer = isset($_POST['programmer']) ? $_POST['programmer'] : 'no';
    $email = "hello@shmazumder.online"; //$_REQUEST['email'];
    $subject = "Greetings!"; //$_REQUEST['subject'];
    $message = "Hey $name, 
I'm Shazzad Hossain Mazumder — Lecturer of the Department of Computer Science &amp; Engineering at the Feni University and also Director at AGAMiLabs Ltd. 
I completed my B.Sc. and M.S. Engineering in Computer Science & Engineering from the University of Chittagong. 
My work involves research, project management, and web & mobile app development. 
You can click on the links to explore my research, projects, and blog.
I am open to participate in collaborative work regarding research and development. 
Feel free to connect on LinkedIn or drop a line at shmazumder23@gmail.com.";

    $headers = 'From: S.h. Mazumder <' . $email . '>' . PHP_EOL .
        'Reply-To: S.h. Mazumder <' . $email . '>' . PHP_EOL .
        'X-Mailer: PHP/' . phpversion();

    //Send email
    $sent = mail($to, $subject, $message, $headers);

    //Email response
    // echo "Thank you! An email will be sent to you soon!";
} else {
    // echo "Oops! Something went south...";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($sent) : ?>
        <title>Thank you!</title>
    <?php else :  ?>
        <title>Oops!</title>
    <?php endif;  ?>
</head>

<body>

    <?php if ($sent) : ?>
        <h1>Thank you! An email will be sent to you soon!</h1>
    <?php else :  ?>
        <h1>Oops! Something went south...</h1>
    <?php endif;  ?>

</body>

</html>