<!DOCTYPE html>
<html lang="es">
    <?php
        include('classBBDD.php');
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos_principales.css">
    <title>Perfil</title>
</head>

<body>
    <div class="navegador">
        <nav class="navUno">
        <img class="logo" src="logo.png">
            <p><a href="index.php">Inicio</a></p>
            <p><a href="perfil.php">Perfil</a></p>
            <p><a href="peliculas.php">Peliculas</a></p>
            <p><a href="#">Grupos</a></p>
            <p><img class="mensaje" src="lupa.png"></p>
            <p><img class="mensaje" src="mensaje.png"></p>
            <p><img class="mensaje" src="https://i.ibb.co/8jmyjVg/bell-2.png"></p>
        </nav>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div>
        <img src="#" class="fotoPerfil">
    </div>
    <div class="todo">
        <div class="parteIzq">
            <div class="divIzquierda">
                <h2 class="divfo">Online</h2>
                <hr>
            </div>
            <div class="divIzquierda">
                <h2 class="divfo">Miembros recientes</h2>
                <hr>
            </div>
        </div>
        <div class="spanes">
            <div class="preguntaUsuario">
            <p class="actividad"></p>
                <?php
                    $arrayPost = array();
                    $sql='SELECT comentario FROM only_post WHERE usuario="'.$_SESSION['UsuarioIniciado'].'" ORDER BY fecha DESC';
                    $MyBBDD->consulta($sql);
                    while ($fila = $MyBBDD->extraer_registro()) {
                        foreach ($fila as $indice => $valor) {
                            array_push($arrayPost, $valor);
                        }
                    }

                    for ($i=0; $i < count($arrayPost) ; $i++) { 
                        echo '<p class="post"> '.$arrayPost[$i].'</p>';
                        echo '<br>';
                    }
                ?>
            </div>
                <?php
                //echo'<br>';
                ?>
        </div>
        <div class="divSpanDerecha">
            <span>
                <h2>Personas que quizá te interesen</h2>
                <hr>
                <?php
                $arrayPersonas = array();
                $sql='SELECT usuario FROM only_users';
                $MyBBDD->consulta($sql);
                while ($fila = $MyBBDD->extraer_registro()) {
                    foreach ($fila as $indice => $valor) {
                        array_push($arrayPersonas, $valor);
                    }
                }
                for ($i=0; $i < 4 ; $i++) { 
                    echo '<div class="navegador"><img src="#"><p class="personaRecomendada">'.$arrayPersonas[$i].'</p></div>';
                    echo '<br>';
                }
                ?>
            </span>
        </div>
    </div>
    <footer>
        <div class="divfo"> <a href="#">Contacto <a href="#">¿Quiénes somos? <a href="#">Legal</div>
    </footer>
</body>

</html>