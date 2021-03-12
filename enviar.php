<?php
    $destino = "info@aganarclientes.com.ar";
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["Email"];
    $producto = $_POST["Producto"];
    $mensaje = $_POST["Mensaje"];
    $contenido = "Nombre: " . $nombre ."\nApellido: " . $apellido ."\nEmail: " . $email ."\nProducto: " . $producto ."\nMensaje: " . $mensaje;
    
    if(isset($_POST['dejarenblanco'])){
        $dejarenblanco = $_POST['dejarenblanco'];
    }
    if(isset($_POST['nocambiar'])){
        $nocambiar = $_POST['nocambiar'];
    }
    
    
    if ($dejarenblanco == '' && $nocambiar == 'http://') { 
        // código para enviar el formulario
    
        // Enviarlo
        mail($destino,"Formulario de Contacto", $contenido);
    }
    else {
        header("Location:index.html");
    }

?>

<script type="text/javascript">
    alert("Mensaje Enviado Correctamente!!!");
    window.location.href='index.html';
</script>