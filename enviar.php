<?php
    $destino = "info@aganarclientes.com.ar";
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["Email"];
    $producto = $_POST["Producto"];
    $mensaje = $_POST["Mensaje"];
    $contenido = "Nombre: " . $nombre ."\nApellido: " . $apellido ."\nEmail: " . $email ."\nProducto: " . $producto ."\nMensaje: " . $mensaje;
    mail($destino,"Formulario de Contacto", $contenido);
    header("Location:agradecimiento_contacto.html");
?>