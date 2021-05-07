<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
 .sectionprincipal{
    
    margin-left: 20%;
    margin-right: 20%;
    margin-top: 5%;
}
#section1{
    display: flex;
    justify-content: center;
    background-color: rgb(236, 236, 134);
}
@media all and (max-width: 300px) {
    .sectionprincipal{
        margin-left: 0%;
        margin-right: 0%;
        margin-top: 0%;
    }
}
  </style>
</head>

<body>
<section class="sectionprincipal">
  <h2>¿Eres ya usuario?</h2>
    <section id="section1">
    <form action="classBBDD.php" method="post"> <!-- Indico que los datos se procesarán en index.php -->
    <hr>
      <h2>Login</h2>
        <input type="text" name="user" placeholder="Usuario" require=""><br><br> <!-- Pido usuario y contraseña -->
        <input type="password" name="password" placeholder="Contraseña" require=""><br><br>
        <input type="submit" value="Entrar" name="entrar"> <!-- Creo botón de entrar si ya está registrado -->
        <hr>
    </form>
  </section>
  <section id="section1">
    <form action="register.php" method="post"> <!-- Indico que los datos se procesarán en register.php si no está registrado para que le llevé a la página donde se rellenan dichos datos-->
      <p>¿Aún no eres usuario? <input type="submit" value="Crear cuenta"></p>
    </form>
  </section>
  </section>


</body></html>
