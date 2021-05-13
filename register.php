<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register.php</title>
    <style>
        .sectionprincipal {
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 5%;
        }

        #section1 {
            background-color: rgb(236, 236, 134);
            display: flex;
            justify-content: center;
        }

        legend {
            float: left;
            font-weight: bold;
        }

        @media all and (max-width: 300px) {
            .sectionprincipal {
                margin-left: 0%;
                margin-right: 0%;
                margin-top: 0%;
            }

        }
    </style>
</head>

<body>
    <!--Creamos un formulario que envía los datos a index.php, este formulario contiene los campos que después almacenaremos en index.php en las cookies.-->
    <section class="sectionprincipal">
        <h1>Formulario de registro</h1>
        <section id="section1">
            <form class="form" action="index.php" method="POST">
                <hr>
                <legend>Regístrate</legend><br><br>
                <input type="text" name="user" placeholder="Usuario" require></input><br><br>
                <input type="password" name="pass" placeholder="Contraseña" require></input><br><br>
                <input type="text" name="email" placeholder="Email" require><br><br>
                <input type="date" name="birthDate" require><br><br>
                <hr>
                <input type="submit" value="Registrar" name="registrar">
            </form>
        </section>
    </section>
</body>

</html>
