<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $to = 'celsoperez878@gmail.com'; // Dirección de correo a la que se enviará el mensaje
    $subject = 'Nuevo mensaje de contacto';
    $body = "Nombre: $nombre\nCorreo: $correo\n\nMensaje:\n$mensaje";
    $headers = "From: $correo";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado";
    } else {
        echo "Error al enviar el mensaje";
    }
}
?>
