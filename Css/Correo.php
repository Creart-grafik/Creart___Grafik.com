<?php
    $destinatario = "creartgrafik@gmail.com";
    $nombre = $_POST ["nombre"];
    $asunto = $_POST ["asunto"];
    $mensaje = $_POST ["mensaje"];
    $email = $_POST ["email"];

    $header = "Enviarlo desde la pagina de Creart Grafik";
    $MensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
    
    mail( $destinatario, $asunto, $MensajeCompleto, $header);
    echo "<script>alert("Correo enviado exitosamente")</script>";
    echo "<script>setTimeout(\"location.href="Contactanos.html"\",1000)</script>";
?>