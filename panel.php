<?php
$PATH_ES = "Listas\categorias_es.txt";
$PATH_EN = "Listas\categorias_en.txt";

$selectedPath = $PATH_ES;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
</head>
<body>
    <h1>Panel Principal</h1>
    <a href="panel.php?lan=es">ES (Español)</a> | <a href="panel.php?lan=en">EN (English)</a>
    <br />
    <a href="index.php">Cerrar Sesion</a>
    <hr />
    <h2></h2>
    <ul>
        <?php
        $archivoProductos = $selectedPath;
        if (file_exists($archivoProductos)) {
            $lineas = file($archivoProductos, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            
            foreach ($lineas as $producto) {
                echo '<li>' . $producto . '</li>';
            }
        }
        ?>
    </ul>
</body>
</html>