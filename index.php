<?php 
    echo var_dump($_COOKIE);
    $nombre = $clave = "";
    $recordarme = false;
    if(isset($_COOKIE["recuerdame"]) && $_COOKIE["recuerdame"]!=""){
        $nombre = isset($_COOKIE["nombreUsuario"])?$_COOKIE["nombreUsuario"]:"";
        $clave = isset($_COOKIE["claveUsuario"])?$_COOKIE["claveUsuario"]:"";
        $recordarme = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>

  <body>
    <h1>LOGIN</h1>

    <form action="panel.php" method="POST">
      <label for="usuario">Usuario:</label><br />
      <input
        type="text"
        name="usuario"
        id="usuario"
        value="<?php echo $nombre?>"
        required="true"
      /><br />

      <label for="clave">Clave</label><br />
      <input
        type="password"
        name="clave"
        id="clave"
        value="<?php echo $clave?>"
        required="true"
      /><br />

      <input type="checkbox" name="chkRecordarme" id="recordarme" 
        <?php $recordarme? print "checked":""?> />
      <label for="recordarme">Recordarme?</label><br />
      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
