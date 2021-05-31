<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos_principales.css">
    <title>register.php</title>
</head>

<body>
    <!--Creamos un formulario que envía los datos a index.php, este formulario contiene los campos que después almacenaremos en index.php en las cookies.-->
    <section class="sectionprincipal">
        <h1>Formulario de registro</h1>
        <section class="section1">
            <form class="form" action="index.php" method="POST">
                <br>
                <hr>
                <input type="text" name="user" placeholder="Usuario" required size="32"></input><br><br>
                <input type="password" name="pass" placeholder="Contraseña" required size="32"></input><br><br>
                <input type="text" name="email" placeholder="Email" required size="32"><br><br>
                <input type="date" name="birthDate" placeholder = "fecha de nacimiento" required size="32"><br>
                <hr>
                <input type="submit" value="Registrar" name="registrar">
                <br><br>
            </form>
        </section>
    </section>
</body>

</html>
