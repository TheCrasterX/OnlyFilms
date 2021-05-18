<!DOCTYPE html>
<html lang="en">
<?php
include('classBBDD.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos_pelicula.css">
    <title>Pelicula</title>
</head>

<body>
    <div class="navegador">
        <nav class="navUno">
            <img class="logo" src="logo.png">
            <p><a href="index.php">Inicio</a></p>
            <p><a href="perfil.php">Perfil</a></p>
            <p><a href="peliculas.php">Películas</a></p>
            <p><a href="#">Grupos</a></p>
            <p><img class="mensaje" src="lupa.png"></p>
            <p><img class="mensaje" src="mensaje.png"></p>
            <p><img class="mensaje" src="https://i.ibb.co/8jmyjVg/bell-2.png"></p>
        </nav>
    </div>
    <div id="divPrincipal">
        <div class="titulo">
            <h1>Titulo de la película</h1>
        </div>
        <div class="genero">
            <h3>Género: género de la película</h3>
        </div>
        <div class="divSecundario"> 
            <img class="imgPelicula" src="https://www.dacostabalboa.com/es/imagenes/calidad-peliculas.jpg" alt="OnlyFilms">
            <p class="sinopsis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio esse consectetur
                ipsum nihil omnis, repudiandae consequuntur earum accusamus quas, ratione fuga voluptatem voluptatum,
                eveniet doloremque quam ex quibusdam quo.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia velit asperiores veritatis quam! Similique
                aspernatur rerum sint enim incidunt, quo asperiores? Quia nihil molestias repellat illum fugit error
                impedit recusandae.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum autem nobis reiciendis quas iusto
                blanditiis quia quos ut. Eum soluta pariatur deserunt corporis modi illo debitis veniam officiis est
                excepturi.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam neque quibusdam vel aut, eum ipsa
                libero eos voluptatem hic, tempora officia quam rem optio quasi beatae aliquid enim repudiandae tempore.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, perspiciatis. Vitae molestias dolores
                ducimus ad rerum architecto iure ab, corrupti odio quae repudiandae, eos voluptatum quia quis? Earum,
                commodi illo.</p>
        </div>
    </div>
    <div id="divTercero">
            <div id="preguntaUsuario">
            <?php 
                    echo '<form action="classBBDD.php" method="post">';
                    echo '<textarea rows="3" cols="90" name="publicacion" placeholder="¿Qué hay de nuevo ';
                    echo $_SESSION['UsuarioIniciado'];
                    echo '?"></textarea>';
                    echo '<input type="submit" value="Publicar" name="publicar"></form>';
                ?>
            </div>
    </div>
    <div class="divComentarios">

    </div>
</body>

</html>