<?php

    require("vendor/autoload.php");

    use PHPMailer\PHPMailer\PHPMailer;

    function sendMail($subject, $body, $email, $name, $html = false) {

            //configuracion inicial de nuestro servidor de correos

        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $phpmailer->Port = 465;
        $phpmailer->Username = 'bran.dan.her.gar@gmail.com';
        $phpmailer->Password = 'csjuielrukxrltqr';

        //añadiendo destinatarios

        $phpmailer->setFrom('mark@facebook.com', 'Mark Zuckerberg');
        $phpmailer->addAddress($email, $name);

        //definiendo el contenido de mi email

        $phpmailer->isHTML($html);//Set ephpmailer format to HTML
        $phpmailer->Subject = $subject;
        $phpmailer->Body    = $body;

        //Mandar el correo
        $phpmailer->send();        

    }

?>