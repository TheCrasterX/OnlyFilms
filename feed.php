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
    <title>Onlyfilms</title>
</head>
<body class="body1">
    <div class="navegador">
        <nav class="navUno">
            <img class="logo" src="logo.png">
            <p><a href="feed.php">Inicio</a></p>
            <p><a href="perfil.php">Perfil</a></p>
            <p><a href="peliculas.php">Películas</a></p>
            <p><a href="index.php">Cerrar Sesión</a></p>
        </nav>
    </div>
    <div class="navegador">
        <nav class="navDos">
            <p class="actividad">Actividad</p>
        </nav>
    </div>
    <br>
    <div class="todo">
        <div class="parteIzq">
            <div class="divIzquierda">
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
                <hr>
            </div>
        </div>
        
        <div class="spanes">
            <div class="preguntaUsuario">
            <?php
                $arrayFoto = array();
                for ($i=0; $i < 9 ; $i++) { 
                    $sql='SELECT fotoPerfil FROM only_users WHERE usuario="'.$_SESSION['UsuarioIniciado'].'"';
                    $MyBBDD->consulta($sql);
                    while ($fila = $MyBBDD->extraer_registro()) {
                        foreach ($fila as $indice => $valor) {
                            array_push($arrayFoto, $valor);
                            //var_dump($valor);
                        }
                    }
                }

                echo '<img src="'.$arrayFoto[0].'"class="fotoPerfil4">';
            ?>
                <?php
                    echo '<form action="classBBDD.php" method="post">';
                    echo '<textarea rows="3" cols="90" name="publicacion" placeholder="¿Qué hay de nuevo ';
                    echo $_SESSION['UsuarioIniciado'];
                    echo '?"></textarea>';
                    echo '<input class="input" type="submit" value="Publicar" name="publicar"></form>';
                ?>
            </div>
                <?php
                echo'<br>';
                ?>
            <?php
            //Esta funcion nos permite publicar los mensajes de los usuarios y registrarlos en la bbdd  
            
                    $arrayPost = array();
                    $arrayAutorPost = array();
                    $sql='SELECT comentario FROM only_post ORDER BY fecha DESC';
                    $MyBBDD->consulta($sql);
                    while ($fila = $MyBBDD->extraer_registro()) {
                        foreach ($fila as $indice => $valor) {
                            array_push($arrayPost, $valor);
                        }
                    }
                    
                    $sql='SELECT usuario FROM only_post ORDER BY fecha DESC';
                    $MyBBDD->consulta($sql);
                    while ($fila = $MyBBDD->extraer_registro()) {
                        foreach ($fila as $indice => $valor) {
                            array_push($arrayAutorPost, $valor);
                        }
                    }
                    $arrayFoto = array();
                    for ($i=0; $i < 9 ; $i++) { 
                        $sql='SELECT fotoPerfil FROM only_users WHERE usuario="'.$arrayAutorPost[$i].'"';
                        $MyBBDD->consulta($sql);
                        while ($fila = $MyBBDD->extraer_registro()) {
                            foreach ($fila as $indice => $valor) {
                                array_push($arrayFoto, $valor);
                                //var_dump($valor);
                            }
                        }
                    }
                    
                    for ($i=0; $i < 9 ; $i++) { 
                        echo '<div class="navegador">
                                <img src="'.$arrayFoto[$i].'"class="fotoPerfil3">
                                <p class="autorPost">'.$arrayAutorPost[$i].':</p>
                                <p class="post"> <br>'.$arrayPost[$i].'</p>
                            </div>
                            <hr>';
                        echo '<br>';
                    }
                ?>
        </div>
        <div class="divSpanDerecha">
            <div>
                <h2>Personas que quizá te interesen</h2>
                <hr>
                <?php
                $arrayId = array();
                $arrayUsuario = array();
                $sql='SELECT * FROM only_users WHERE usuario !="'.$_SESSION['UsuarioIniciado'].'"';
                $MyBBDD->consulta($sql);
                while ($fila = $MyBBDD->extraer_registro()) {
                    $id = $fila['id'];
                    $usuario = $fila['usuario'];
                    array_push($arrayId, $id);
                    array_push($arrayUsuario, $usuario);
                }
                for ($i=0; $i < 5 ; $i++) { 
                    /*Aqui tambien puedes añadir estilos Tamara*/
                    echo '<div class="navegador2"><a href=perfilextra.php?id='.$arrayId[$i].'><img src="'.$arrayFoto[$i].'"class="fotoPerfil2"><p class="personaRecomendada">'.$arrayUsuario[$i].'</p></a></div>';
                    echo '<br>';
                }
                ?><hr>
            </div>
        </div>
    </div>
    <footer>
        <div class="divfo"><a href="#">Contacto <a href="#">¿Quiénes somos? <a href="#">Legal</div>
    </footer>
</body>

</html>