<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Extra</title>
</head>
<body>
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
    <link rel="icon" type="image/png" href="favicon.ico">
    <title>Perfil</title>
</head>

<body>
    <div class="navegador">
        <nav class="navUno">
        <img class="logo" src="logo.png">
            <p><a href="index.php">Inicio</a></p>
            <p><a href="perfil.php">Perfil</a></p>
            <p><a href="peliculas.php">Peliculas</a></p>
            <p><img class="mensaje" src="lupa.png"></p>
            <p><img class="mensaje" src="https://i.ibb.co/8jmyjVg/bell-2.png"></p>
            <p><a href="login.php">Cerrar Sesión</a></p>
        </nav>
    </div>
    <br><br><br><br><br> <!-- Esto hay que arreglarlo -->
    <div>
    <?php
            $idUsuario = $_GET['id'];
            $sql = "SELECT usuario FROM only_users WHERE id= $idUsuario";
            $MyBBDD->consulta($sql);
            while ($fila = $MyBBDD->extraer_registro()) {
                $usuario = $fila['usuario'];
                echo "<h1>Perfil de: $usuario</h1>";
            }
    ?>
    <?php 
        $arrayFoto = array();
        $sql="SELECT fotoPerfil FROM only_users WHERE id= $idUsuario";
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            foreach ($fila as $indice => $valor) {
                array_push($arrayFoto, $valor);
            }
        }

        for ($i=0; $i < count($arrayFoto) ; $i++) { 
            echo "<img src=".$arrayFoto[$i]." class='fotoPerfil'>";
        }
    ?>
        
    </div>
    <div class="todo">
        <div class="parteIzq">
            <div class="divIzquierda">
                <h2 class="divfo">Miembros recientes</h2>
                <hr>
            </div>
        </div>
        <div class="spanes">
            <div class="feedPerfil"> <!-- Añadir un título para los comentarios de uno mismo -->
                <?php
                    $arrayPost = array();
                    $sql='SELECT comentario FROM only_post WHERE usuario="'.$usuario.'" ORDER BY fecha DESC';
                    $MyBBDD->consulta($sql);
                    while ($fila = $MyBBDD->extraer_registro()) {
                        foreach ($fila as $indice => $valor) {
                            array_push($arrayPost, $valor);
                        }
                    }

                    for ($i=0; $i <= 9 ; $i++) { 
                        echo '<div class="divComentarios">';
                        echo '<p class="post"> '.$arrayPost[$i].'</p>';
                        echo '</div>';    
                    }
                ?>
            </div>
                <?php
                //echo'<br>';
                ?>
        </div>
    </div>
    <footer class="perfil"> <!-- Hay que hacer que se quede abajo el footer fijo-->
        <div class="divfo"> <a href="#">Contacto <a href="#">¿Quiénes somos? <a href="#">Legal</div>
    </footer>
</body>

</html>
</body>
</html>