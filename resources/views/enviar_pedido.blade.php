<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // Configuración SMTP para Outlook
        $mail->isSMTP();
        $mail->Host       = 'smtp.office365.com';          // servidor SMTP de Outlook
        $mail->SMTPAuth   = true;
        $mail->Username   = 'eduardodlcruz05@hotmail.com';         // tu correo Outlook
        $mail->Password   = 'Fockin19';               // tu contraseña Outlook
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

            $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    ];

        // Remitente y destinatario
        $mail->setFrom('eduardodlcruz05@hotmail.com', 'Solochifles');
        $mail->addAddress('eduardodlcruz05@ejemplo.com', 'Leonel');      // correo receptor

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo pedido recibido';
        $mail->Body    = 'Aquí va el detalle del pedido...';

        $mail->send();
        echo 'Pedido enviado correctamente';
    } catch (Exception $e) {
        echo "Error al enviar el pedido: {$mail->ErrorInfo}";
    }
}
?>
