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
            <p><a href="index.html">Inicio</a></p>
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
                    echo '<textarea placeholder="¿Qué hay de nuevo ';
                    echo $_SESSION['UsuarioIniciado'];
                    echo '?"></textarea>';
                    //echo '<textarea placeholder="¿Qué hay de nuevo @usuario?"></textarea>';
                ?>
            </div>
            <div class="peli">
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
            </div>
        </div>
        <div id="divSpanDerecha">
            <span>
                <h2>Personas que quizá te interesen</h2>
                <hr>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis reiciendis ea tenetur eaque, hic
                doloribus repellendus ab eveniet harum temporibus laboriosam eius voluptates molestias aperiam
                exercitationem voluptate adipisci dolore alias?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam illo optio laudantium magnam labore
                vitae ipsum nemo, ducimus ea temporibus libero placeat nesciunt veritatis tempore mollitia unde incidunt
                expedita accusantium!
            </span>
        </div>
    </div>
    <footer>
        <div id="divfo">Contacto ¿Quienes somos? Legal</div>
    </footer>
</body>

</html>