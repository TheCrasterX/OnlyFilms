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

<body class="body1">
    <div class="navegador">
        <nav class="navUno">
        <img class="logo" src="logo.png">
        <p><a href="feed.php">Inicio</a></p>
            <p><a href="perfil.php">Perfil</a></p>
            <p><a href="peliculas.php">Peliculas</a></p>
            <p><a href="index.php">Cerrar Sesión</a></p>
        </nav>
    </div>
    <br><br><br><br><br> 
    <div>
    <?php
        $arrayFoto = array();
        $sql='SELECT fotoPerfil FROM only_users WHERE usuario="'.$_SESSION['UsuarioIniciado'].'"';
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
            <div class="divIzquierda2">
                <h2 class="divfo">Miembros recientes</h2>
                <hr>
                <?php
                $arrayId = array();
                $arrayUsuario = array();
                $arrayFoto = array();
                $sql='SELECT * FROM only_users WHERE usuario !="'.$_SESSION['UsuarioIniciado'].'"ORDER BY id DESC';
                $MyBBDD->consulta($sql);
                while ($fila = $MyBBDD->extraer_registro()) {
                    $id = $fila['id'];
                    $usuario = $fila['usuario'];
                    $fotoPerfil = $fila['fotoPerfil'];
                    array_push($arrayId, $id);
                    array_push($arrayUsuario, $usuario);
                    array_push($arrayFoto, $fotoPerfil);
                }
                for ($i=0; $i < 5 ; $i++) { 
                    /*Aqui tambien puedes añadir estilos Tamara*/
                    echo '<div class="navegador2"><a href=perfilextra.php?id='.$arrayId[$i].'><img src="'.$arrayFoto[$i].'"class="fotoPerfil2"><p class="personaRecomendada">'.$arrayUsuario[$i].'</p></a></div>';
                    echo '<br>';
                }
                ?>
            </div>
        </div>
        <div class="spanes2">
            <div id="comentariosPerfil"><h1>Comentarios Realizados</h1></div>
            <div class="feedPerfil"> <!-- Añadir un título para los comentarios de uno mismo -->
                <?php
                    $arrayPost = array();
                    $sql='SELECT comentario FROM only_post WHERE usuario="'.$_SESSION['UsuarioIniciado'].'" ORDER BY fecha DESC';
                    $MyBBDD->consulta($sql);
                    while ($fila = $MyBBDD->extraer_registro()) {
                        foreach ($fila as $indice => $valor) {
                            array_push($arrayPost, $valor);
                        }
                    }

                    for ($i=0; $i <= count($arrayPost) - 1 ; $i++) {
                        echo '<div class="divComentarios">';
                        echo '<p class="post2"> '.$arrayPost[$i].'</p>';
                        echo '</div>';    
                    }
                ?>
            </div>
        </div>
        <div class="divSpanDerecha2"> 
            <span>
                <h2>Personas que quizá te interesen</h2>
                <hr>
                <?php
                $arrayId = array();
                $arrayUsuario = array();
                $arrayFoto = array();
                $sql='SELECT * FROM only_users WHERE usuario !="'.$_SESSION['UsuarioIniciado'].'"';
                $MyBBDD->consulta($sql);
                while ($fila = $MyBBDD->extraer_registro()) {
                    $id = $fila['id'];
                    $usuario = $fila['usuario'];
                    $fotoPerfil = $fila['fotoPerfil'];
                    array_push($arrayId, $id);
                    array_push($arrayUsuario, $usuario);
                    array_push($arrayFoto, $fotoPerfil);
                }
                for ($i=0; $i < 5 ; $i++) { 
                    echo '<div class="navegador2"><a href=perfilextra.php?id='.$arrayId[$i].'><img src="'.$arrayFoto[$i].'"class="fotoPerfil2"><p class="personaRecomendada">'.$arrayUsuario[$i].'</p></a></div>';
                    echo '<br>';
                }
                ?>
            </span>
        </div>
    </div>
    <footer class="perfil"> <!-- Hay que hacer que se quede abajo el footer fijo-->
        <div class="divfo"> <a href="#">Contacto <a href="#">¿Quiénes somos? <a href="#">Legal</div>
    </footer>
</body>

</html>