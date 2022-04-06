<?php

    function ConectarBD()
    {
        $servidor = "localhost";
        $baseDatos = "bd_viernes";
        $usuario = "root";
        $clave = "";

        return mysqli_connect($servidor, $usuario, $clave, $baseDatos);
    }

    function CerrarBD($enlace)
    {
        mysqli_close($enlace);
    }

    function SendEmail($destinatario, $asunto, $cuerpo)
    {
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer();
        $mail -> CharSet = 'UTF-8';

        $mail -> IsSMTP();
        $mail -> Host = 'smtp.office365.com'; //o smtp.gmail.com     
        $mail -> SMTPSecure = 'tls';
        $mail -> Port = 587; // 465                                
        $mail -> SMTPAuth = true;
        $mail -> Username = 'claseProgra3.5@outlook.com';               
        $mail -> Password = 'progra3.5';                                
        $mail -> SetFrom('claseProgra3.5@outlook.com', "Profesor");
        $mail -> Subject = $asunto;
        $mail -> MsgHTML($cuerpo);
        $mail -> AddAddress($destinatario, 'Estudiante');
        $mail -> send();
    }

?>