<?php

    if(!empty($_POST)){

    $destino = "info@aganarclientes.com.ar";
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["Email"];
    $producto = $_POST["Producto"];
    $mensaje = $_POST["Mensaje"];
    $contenido = "Nombre: " . $nombre ."\nApellido: " . $apellido ."\nEmail: " . $email ."\nProducto: " . $producto ."\nMensaje: " . $mensaje;
    $captcha = $_POST["g-recaptcha-response"];
    $secret = '6Lc9aV4aAAAAAJeSekUobPsz4j5W10C9stnFjtSk';

    if(!$captcha){
        echo "Por favor verifica el captcha";
    }

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");

    //var_dump($response);

    $arr = json_decode($response, TRUE);
    $response = 'hola';
    if($arr['success']){
        
    mail($destino,"Formulario de Contacto", $contenido);
    //header("Location:agradecimiento_contacto.html");

    } else {
        echo '<h3>Error al comprobar Captcha<h3>';
    }
}
?>

<script type="text/javascript">
    alert("Mensaje Enviado Correctamente!!!");
    window.location.href='index.html';
</script>