<?php

if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $list = explode(" ", $name);
    
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2><?= "Bienvenido" ?> </h2>
        <p><?= $name . " tu correo es " . $email?></p>
        <p><?= strtoupper($name)?></p>
        <p><?= strtolower($name)?></p>
        <p><?= trim($name)?></p>
        <p><?= $list[0] ?></p>
        <p><?= $list[1] ?></p>
        <p><?= "Longitud del nombre: " . strlen($list[0]) ?><br><?=
             "Longitud del apellido: " . strlen($list[1])?></p>
        <?= "hash de tu nombre: " . $hash = md5("Hola Mundo"); ?>
        <p><?= nl2br("\n" . $name)?></p>
        <?php if ($mostrarMensaje): ?>
        <div class="mensaje">Este es un mensaje importante.</div>
        <?php else: ?>
        <div class="sin-mensaje">No hay mensajes.</div>
        <?php endif; ?>
        

        
    </div>

  
</body>
</html>
