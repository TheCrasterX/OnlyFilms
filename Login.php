<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos_principales.css">
    <title>Login</title>
</head>

<body>
<section class="sectionprincipal">
  <h1>Bienvenido a OnlyFilms</h1>
    <section class="section1">
    <form action="classBBDD.php" method="post"> <!-- Indico que los datos se procesarán en index.php -->
    <hr>
      <h3>Login</h3>
        <input type="text" name="user" placeholder="Usuario" required size="31"><br><br> <!-- Pido usuario y contraseña -->
        <input type="password" name="pass" placeholder="Contraseña" required size="32"><br><br>
        <input type="submit" name="entrar" value="Entrar" class="enter"> <!-- Creo botón de entrar si ya está registrado -->
        <hr>
    </form>
  </section>
  <section class="section1">
    <form action="register.php" method="post"> <!-- Indico que los datos se procesarán en register.php si no está registrado para que le llevé a la página donde se rellenan dichos datos-->
      <p>¿Aún no eres usuario? <a id="registrate" href="register.php">Regístrate</p>
    </form>
  </section>
  </section>
</body></html>
