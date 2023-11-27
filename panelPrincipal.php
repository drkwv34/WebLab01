<?php
$PATH_ES = "Listas\categorias_es.txt";
$PATH_EN = "Listas\categorias_en.txt";
$selectedPath = $PATH_ES;

session_start();
if (!isset($_SESSION["username"]) && !isset($_SESSION["password"])) {
    header("Location:index.php");
}

echo var_dump($_SESSION);
if ($_SESSION["rememberme"] != "") {
    setcookie("nombreUsuario", $_SESSION["username"], 0);
    setcookie("claveUsuario", $_SESSION["password"], 0);
    setcookie("recuerdame", $_SESSION["rememberme"], 0);
    if (isset($_COOKIE["languaje"])) {
        setcookie("languaje", $_COOKIE["languaje"], 0);
        $selectedPath = ($_COOKIE["languaje"] = "es") ? $PATH_ES : $PATH_EN;
    } else {
        setcookie("languaje", "es", 0);
        $selectedPath = $PATH_ES;
    }
} else {
    if (isset($_COOKIE)) {
        foreach ($_COOKIE as $name => $value) {
            setcookie($name, '', 1);
        }
    }
}
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
    <h2>
        <?php
        if (isset($_GET["lan"])) {
            echo ($_GET["lan"] = "en") ? "Product List" : "Lista de productos";
        } else {
            echo "Lista de productos";
        }
        ?>
    </h2>
    <ul>
        <?php
        if (file_exists($selectedPath)) {
            $lineas = file($selectedPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            foreach ($lineas as $producto) {
                echo '<li>' . $producto . '</li>';
            }
        }
        ?>
    </ul>
</body>
</html>