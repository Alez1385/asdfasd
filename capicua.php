<?php

if(isset($_POST)){
    $num = intval($_POST['num']);
    $aux = $aux;
    while ($aux > 0){
        $aux = ($aux * 10) + ($aux % 10);
        $aux = $aux / 10;
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
        <?php if ($aux == $num): ?>
        <p>El numero <?=$num?> si es capicua</p>
        <?php else: ?>
        <p>El numero <?=$num?> no es capicua</p>
        <?php endif; ?>
    </div>

  
</body>
</html>
