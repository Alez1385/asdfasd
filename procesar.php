<?php

if(isset($_POST)){
    $num = intval($_POST['num']);
    $fac = 1;
    for($i = 1; $i <= $num; $i++){
        $fac *= $i;
    }
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
        <p>El factorial es: <?= $fac ?></p>
        
    </div>

  
</body>
</html>
