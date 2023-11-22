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
        value=""
        required="true"
      /><br />

      <label for="clave">Clave</label><br />
      <input
        type="password"
        name="clave"
        id="clave"
        value=""
        required="true"
      /><br />

      <input type="checkbox" name="chkRecordarme" id="recordarme" />
      <label for="recordarme">Recordarme?</label><br />
      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
