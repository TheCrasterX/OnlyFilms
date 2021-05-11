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
        <nav id="navUno">
            <img id="logo" src="logo.png">
            <p><a href="index.php">Inicio</a></p>
            <p><a href="#">Perfil</a></p>
            <p><a href="#">Miembros</a></p>
            <p><a href="#">Grupos</a></p>
            <p><img id="mensaje" src="lupa.png">
            </p>
            <p><img id="mensaje" src="mensaje.png">
            </p>
            <p><img id="mensaje" src="https://i.ibb.co/8jmyjVg/bell-2.png"></p>
        </nav>
    </div>
    <div class="navegador">
        <nav id="navDos">
            <p id="actividad">Actividad</p>
        </nav>
    </div>
    <div id="todo">
        <div id="parteIzq">
            <div id="divIzquierda">
                <h2 id="divfo">Online</h2>
                <hr>
            </div>
            <div id="divIzquierda">
                <h2 id="divfo">Miembros recientes</h2>
                <hr>
            </div>
        </div>
        <div id="spanes">
            <div id="preguntaUsuario">
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
            //En algun punto de la funcion se queda almacenado el comentario y comienza a repetirse y a insertarlo varias veces     
            
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
                        echo '<div class="navegador"><img src="#"><p class="autorPost">Por '.$arrayAutorPost[$i].'</p><p class="post">'.$arrayPost[$i].'</p></div>';
                        echo '<br>';
                    }
                ?>
            <!--<div class="peli">
                <p class="titulo">Titulo pelicula</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic minus quos rerum alias? Cum veniam,
                    numquam quaerat nam voluptatum hic quos incidunt dignissimos iure, ullam, soluta culpa suscipit.
                    Dignissimos, distinctio?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic minus quos rerum alias? Cum veniam,
                    numquam quaerat nam voluptatum hic quos incidunt dignissimos iure, ullam, soluta culpa suscipit.
                    Dignissimos, distinctio?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic minus quos rerum alias? Cum veniam,
                    numquam quaerat nam voluptatum hic quos incidunt dignissimos iure, ullam, soluta culpa suscipit.
                    Dignissimos, distinctio?</p>
                <button class="botones">Like</button>
                <button class="botones">Dislike</button>
                <button class="botones">Comentar</button>
            </div>-->
        </div>
        <div id="divSpanDerecha">
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
                    echo '<div class="navegador"><img src="#"><p>'.$arrayPersonas[$i].'</p></div>';
                    echo '<br>';
                }
                ?>
            </span>
        </div>
    </div>
    <footer>
        <div id="divfo">Contacto ¿Quienes somos? Legal</div>
    </footer>
</body>

</html>