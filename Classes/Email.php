<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {
    protected $email;
    protected $nombre;
    protected $token;

    public function __construct($email, $nombre, $token) {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {

        // Crear el objeto de email
       // Looking to send emails in production? Check out our Email API/SMTP product!
         // Crear objeto email
         $mail = new PHPMailer;
         $mail->isSMTP();
         $mail->SMTPDebug = 0;
         $mail->Debugoutput = 'html';
         $mail->SMTPAuth = true;
         $mail->SMTPSecure = 'ssl';
         $mail->CharSet = 'UTF-8';
         $mail->IsHTML(true);
 
         $mail->Host = $_ENV['EMAIL_HOST'];
         $mail->SMTPAuth = true;
         $mail->Port = $_ENV['EMAIL_PORT'];
         $mail->Username = $_ENV['EMAIL_USER'];
         $mail->Password = $_ENV['EMAIL_PASS'];

       $mail->setFrom('lizznailscita@gmail.com');
       $mail->addAddress($this->email, $this->nombre);
       $mail->Subject = 'Confirma tu Cuenta';
       
       // Seth HTML
       $mail->isHTML(TRUE);
       $mail->CharSet = 'UTTF-8';

       $contenido = '<html>';
       $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has Creado tu cuenta en lizznailscita, solo debes confirmarla presionando el siguiente enlace</p>";
       $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['APP_URL'] . "/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";
       $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
       $contenido .= '</html>';
       $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }

    public function enviarInstrucciones() {

        // Crear el objeto de email
       // Looking to send emails in production? Check out our Email API/SMTP product!
         // Crear objeto email
         $mail = new PHPMailer;
         $mail->isSMTP();
         $mail->SMTPDebug = 0;
         $mail->Debugoutput = 'html';
         $mail->SMTPAuth = true;
         $mail->SMTPSecure = 'ssl';
         $mail->CharSet = 'UTF-8';
         $mail->IsHTML(true);
 
         $mail->Host = $_ENV['EMAIL_HOST'];
         $mail->SMTPAuth = true;
         $mail->Port = $_ENV['EMAIL_PORT'];
         $mail->Username = $_ENV['EMAIL_USER'];
         $mail->Password = $_ENV['EMAIL_PASS'];

         $mail->setFrom('lizznailscita@gmail.com');
         $mail->addAddress($this->email, $this->nombre);
         $mail->Subject = 'Reestablecer tu Contraseña';
       
       // Seth HTML
       $mail->isHTML(TRUE);
       $mail->CharSet = 'UTTF-8';

       $contenido = '<html>';
       $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Parece que has olvidado tu Contraseña, sigue el siguiente enlace para recuperarlos</p>";
       $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['APP_URL'] . "/recuperar?token=" . $this->token . "'>Reestablecer Contraseña</a>";
       $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
       $contenido .= '</html>';
       $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }
}