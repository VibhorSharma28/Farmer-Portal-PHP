<?php
    require 'PHPMailerAutoload.php' ;
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = 'vibhorsharma.vb@gmail.com';
    $mail->Password = 'vibhor12345';

    $mail->setFrom('vibhorsharma.vb@gmail.com','Prathviraj Biotech India');
    $mail->addAddress('vibsgfs@gmail.com');
    $mail->addReplyTo('vibhor.sharma2017@vitstudent.ac.in');

    $mail->isHTML(true);
    $mail->Subject="Customer Query";
    $mail->Body = $_POST['text'];
    if(!$mail->send()){
        echo "Message failed";
    }
    else{
        echo "Success";
    }
?>