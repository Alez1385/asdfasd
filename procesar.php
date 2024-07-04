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
        <p><?= "Tu nombre en mayusculas es " . strtoupper($name)?></p>
        <p><?= "Tu nombre en minusculas es " . strtolower($name)?></p>
        <p><?= "Tu nombre sin espacios es " . trim($name)?></p>
        <p><?= "Tu nombre es " . $list[0] ?></p>
        <p><?= "Tu apellido es " . $list[1] ?></p>
        <p><?= "Longitud del nombre: " . strlen($list[0]) ?><br><?=
             "Longitud del apellido: " . strlen($list[1])?></p>
        <?= "hash de tu nombre: " . $hash = md5("Hola Mundo"); ?>
        <p><?= "Tu nombre con salto de linea es " . nl2br("\n" . $name)?></p>
        <?php if ($name == "Santiago"): ?>
        <div class="mensaje">Te llamas Santiago.</div>
        <?php else: ?>
        <div class="sin-mensaje">No eres Santiago.</div>
        <?php endif; ?>
        <p><?="La primera letra de tu nombre es " . substr($list[0], 0, 1) ?></p>
        <p><?="La primera letra de tu apellido es " . substr($list[1], 0, 1) ?></p>

        
    </div>

  
</body>
</html>
