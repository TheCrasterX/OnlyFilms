<!DOCTYPE html>
<html lang="en">
<?php
    include('classBBDD.php');
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos_principales.css">
    <title>Onlyfilms</title>
</head>
<body>
    <div class="navegador">
        <nav class="navUno">
            <img class="logo" src="logo.png">
            <p><a href="index.php">Inicio</a></p>
            <p><a href="perfil.php">Perfil</a></p>
            <p><a href="peliculas.php">Películas</a></p>
            <p><a href="login.php">Cerrar Sesión</a></p>
            <p><img class="mensaje" src="lupa.png"></p>
            <p><img class="mensaje" src="mensaje.png"></p>
            <p><img class="mensaje" src="https://i.ibb.co/8jmyjVg/bell-2.png"></p>
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
                <img src="#">
                <?php
                    echo '<form action="classBBDD.php" method="post">';
                    echo '<textarea rows="3" cols="90" name="publicacion" placeholder="¿Qué hay de nuevo ';
                    echo $_SESSION['UsuarioIniciado'];
                    echo '?"></textarea>';
                    echo '<input type="submit" value="Publicar" name="publicar"></form>';
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
                    /*Tamara da estilo a la clase navegador para poner los post como tu quieras y coloca las cosas de su interior como quieras
                    fijate que te he dejado ya las clases escritas y todo*/
                    for ($i=0; $i < 9 ; $i++) { 
                        echo '<div class="navegador"><img src="#"><p class="autorPost">Por '.$arrayAutorPost[$i].'</p><p class="post"> '.$arrayPost[$i].'</p></div>';
                        echo '<br>';
                    }
                ?>
        </div>
        <div class="divSpanDerecha">
            <span>
                <h2>Personas que quizá te interesen</h2>
                <hr>
                <?php
                $arrayPersonas = array();
                $sql='SELECT usuario FROM only_users WHERE usuario !="'.$_SESSION['UsuarioIniciado'].'"';
                $MyBBDD->consulta($sql);
                while ($fila = $MyBBDD->extraer_registro()) {
                    foreach ($fila as $indice => $valor) {
                        array_push($arrayPersonas, $valor);
                    }
                }
                for ($i=0; $i < 5 ; $i++) { 
                    /*Aqui tambien puedes añadir estilos Tamara*/
                    echo '<div class="navegador"><img src="#"><p class="personaRecomendada">'.$arrayPersonas[$i].'</p></div>';
                    echo '<br>';
                }
                ?>
            </span>
        </div>
    </div>
    <footer>
        <div class="divfo"><a href="#">Contacto <a href="#">¿Quiénes somos? <a href="#">Legal</div>
    </footer>
</body>

</html>