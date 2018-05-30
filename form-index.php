
<?php 
    $name = trim(urldecode(htmlspecialchars($_POST['name'])));
    $company = trim(urldecode(htmlspecialchars($_POST['company'])));
    $email = trim(urldecode(htmlspecialchars($_POST['email'])));
    $telephone = trim(urldecode(htmlspecialchars($_POST['telephone'])));
    $message = trim(urldecode(htmlspecialchars($_POST['message'])));
    
    $mail_to = "you@yourdomain.com";
    $mail_subject = "Your email subject line";
    $headers = '';

    $mail_message = '';
    $mail_message .= "name: ".clean_string($name)."\n";
    $mail_message .= "company: ".clean_string($company)."\n";
    $mail_message .= "email: ".clean_string($email)."\n";
    $mail_message .= "telephone: ".clean_string($telephone)."\n";
    $mail_message .= "message: ".clean_string($message)."\n";
    

    mail($mail_to, $mail_subject, $mail_message, $headers);  


?>