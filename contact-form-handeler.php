<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    // $email_subject = $_POST['subject'];
    $email_from = 'techsideusa@gmail.com';
    
    $email_subject = "New form submision";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User message: $message.\n";
    $to = "bohdan.dz.92@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to.$email_subject,$email_body,$headers);

    header("Location: index.html");


?>