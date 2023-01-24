<?php

// if

    // require 'PHPMailerAutoload.php';
    // echo "hey";

    // $mail = new PHPMailer;

    $from = $_POST['name'];
    $email = $_POST['email'];
    // $message = $_POST['message'];

    $to = "codewithraf769@gmail.com";

    $subject = "From Your Portfolio";
    $message = "This is a test email message sent using PHP mail.";
    $headers = "From: " . $from . "\r\n" .
               "Reply-To: " . $to . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error: Email not sent.";
    }

    header("location:../index.html")

    // $subject = "Test Email using PHP mail";
    // $message = "This is a test email message sent using PHP mail.";
    // $headers = "From: sender@example.com" . "\r\n" .
    //            "Reply-To: sender@example.com" . "\r\n" .
    //            "X-Mailer: PHP/" . phpversion();
    // mail($to, $subject, $message, $headers);
    // echo "Email sent successfully.";



    // use Symfony\Component\Mailer\Mailer;
    // use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
    // use Symfony\Component\Mime\Email;
    
    // $transport = new EsmtpTransport('smtp.gmail.com', 587, true, null, null, 'Amin Adboulah', 'Amine66594828@');
    // $mailer = new Mailer($transport);
    
    // $email = (new Email())
    //     ->from($from)
    //     ->to($to)
    //     ->subject('From portfolio')
    //     ->text('This is a test email sent using the Symfony Mailer component');
    
    // $sentMessage = $mailer->send($email);
    
    // if ($sentMessage->getMessageId()) {
    //     echo 'Email sent successfully with message ID: ' . $sentMessage->getMessageId();
    // } else {
    //     echo 'Email sending failed';
    // }

    // if ($sentMessage->getStatusCode() === 250) {
    //     echo 'Email sent successfully with message ID: ' . $sentMessage->getMessageId();
    // } else {
    //     echo 'Email sending failed';
    // }
    
    



    // use Symfony\Component\Mailer\Mailer;
    // use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
    // use Symfony\Component\Mime\Email;

    // $transport = new EsmtpTransport('smtp.gmail.com', 587, true, null, null, 'Amin Adboulah', 'Amine66594828@');
    // $mailer = new Mailer($transport);

    // $email = (new Email())
    //     ->from($from)
    //     ->to($to)
    //     ->subject('From your Portfolio')
    //     ->text($message);

    // $mailer->send("From: ". $from . "<br>" . $message);


?>
