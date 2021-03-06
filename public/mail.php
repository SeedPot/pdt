<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Ocurrió un error.";
            exit;
        }

        // CAMBIAR POR EL MAIL DE CONTACTO DEL PDT
        $to = 'gerencia@supportconsultores.cl';
        // $to = 'julio.caruncho.a@gmail.com';

        $pdtEmail = 'contacto@industriasolartarapaca.cl';

        $subject = 'Mensaje desde web PDT';

        $headers = "From: " . $pdtEmail . "\r\n";
        //$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
        //$headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // Build the email content.
       $mensaje = "<div style='margin: 0; padding: 0; background-color:#eeeeee'><table border='0' cellpadding='0' cellspacing='0' width='100%'><tr><td style='padding: 30px 0 0 0;'><table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border-collapse: collapse;'><tr><td align='center' bgcolor='#4D79BC' style='padding: 20px 0 20px 0;'><img src='http://industriasolartarapaca.cl/images/logo_support.png' alt='Support Consultores logo' width='500' style='display: block;' /></td></tr><tr><td bgcolor='#4D79BC' style='padding: 40px 50px 40px 50px;'><table bgcolor='#4D79BC' border='0' cellpadding='0' cellspacing='0' width='100%'><tr><td style='color: #fff; font-family: Arial, sans-serif; font-size: 24px; border-bottom: 1px solid #fff; text-align: center; padding: 0 0 20px 0;'><b>Menasaje enviado desde el sitio web.</b></td></tr><tr><td style='padding: 20px 0 10px 0; color: #fff; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'><b>Datos personales:</b></td></tr><tr><td style='padding: 10px 0 10px 20px; color: #fff; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>Nombre: ".$name."</td></tr><tr><td style='padding: 10px 0 10px 20px; color: #fff; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>Email: <span style='color: #fff; text-decoration: none !important;'>".$email."</span></td></tr><tr><td style='padding: 20px 0 10px 0; color: #fff; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'><b>Mensaje:</b></td></tr><tr><td style='padding: 20px 0 30px 20px; color: #fff; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; text-align:justify;'>".$message."</td></tr></table></td></tr><tr><td bgcolor='#22313F' style='color:#ffffff; padding: 30px 30px 30px 30px; font-family: Arial, sans-serif; font-size: 14px; text-align:center;'><strong>Este correo ha sido generado en forma automática</strong></td></tr></table></td></tr></table></div>";

        // Send the email.
        if (mail($to, $subject, $mensaje, $headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Mensaje enviado.Gracias por contactarte con nosotros.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Algo salió mal, tu mensaje no fue enviado.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Hubo un problema con el envío, intenta más tarde.";
    }

?>