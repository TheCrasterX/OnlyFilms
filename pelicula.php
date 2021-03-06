<!DOCTYPE html>
<html lang="es">
<?php
include('classBBDD.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos_pelicula.css">
    <link rel="icon" type="image/png" href="favicon.ico">
    <title>Pelicula</title>
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
    <div id="divPrincipal">
        <div class="titulo">
            <?php
            $idPelicula = $_GET['id'];
            $_SESSION['idPelicula'] = $idPelicula;
            $sql = "SELECT titulo FROM only_films WHERE id= $idPelicula";
            $MyBBDD->consulta($sql);
            while ($fila = $MyBBDD->extraer_registro()) {
                $titulo = $fila['titulo'];
                echo "<h1>$titulo";
            }
            $idPelicula = $_GET['id'];
            $sql = "SELECT año FROM only_films WHERE id= $idPelicula";
            $MyBBDD->consulta($sql);
            while ($fila = $MyBBDD->extraer_registro()) {
                $año = $fila['año'];
                echo " ($año)</h1>";
            }
        ?>
        </div>
        <div class="genero">
        <?php
            $idPelicula = $_GET['id'];
            $sql = "SELECT genero FROM only_films WHERE id= $idPelicula";
            $MyBBDD->consulta($sql);
            while ($fila = $MyBBDD->extraer_registro()) {
                $genero = $fila['genero'];
                echo "<h3>Género: $genero</h3>";
            }
            ?>
        </div>
        <div class="divSecundario"> 
        <?php
            $idPelicula = $_GET['id'];
            $sql = "SELECT foto FROM only_films WHERE id= $idPelicula";
            $MyBBDD->consulta($sql);
            while ($fila = $MyBBDD->extraer_registro()) {
                $foto = $fila['foto'];
                echo "<img class='imgPelicula' src='$foto' alt='OnlyFilms'>";
            }
            ?>
        <?php
            $idPelicula = $_GET['id'];
            $sql = "SELECT sinopsis FROM only_films WHERE id= $idPelicula";
            $MyBBDD->consulta($sql);
            while ($fila = $MyBBDD->extraer_registro()) {
                $sinopsis = $fila['sinopsis'];
                echo "<p class='sinopsis'>$sinopsis</p>";
        }
            ?>
        <?php
            $idPelicula = $_GET['id'];
            $sql = "SELECT director FROM only_films WHERE id= $idPelicula";
            $MyBBDD->consulta($sql);
            while ($fila = $MyBBDD->extraer_registro()) {
                $director = $fila['director'];
                echo "<p class='director'>Dirigida por: $director</p>";
            }
        ?>
        <?php
            $idPelicula = $_GET['id'];
            $sql = "SELECT actores FROM only_films WHERE id= $idPelicula";
            $MyBBDD->consulta($sql);
            while ($fila = $MyBBDD->extraer_registro()) {
                $actores = $fila['actores'];
                echo "<p class='actores'>$actores</p>";
            }
        ?>
        </div>
    </div>
    <div id="divTercero">
            <div id="preguntaUsuario">
            <?php 
                    echo '<form action="classBBDD.php" method="post" style="width: 100%">';
                    echo '<textarea rows="3" cols="90" name="publicacion" placeholder="¿Qué hay de nuevo ';
                    echo $_SESSION['UsuarioIniciado'];
                    echo '?"></textarea>';
                    echo '<input class="input" type="submit" value="Publicar" name="comentar"></form>';
                ?>
            </div>
    </div>
    <div class="divComentarios">
    <?php
        $arrayUsuarios = array();
        $arrayComentarios = array();
        $idPelicula = $_GET['id'];
        $sql = "SELECT usuario, comentario FROM only_post WHERE id_peli = " .$idPelicula." ORDER BY fecha DESC";
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            $usuario = $fila ['usuario'];
            $comentario = $fila['comentario'];
            array_unshift($arrayUsuarios, $usuario);
            array_unshift($arrayComentarios, $comentario);
            /*echo '<div class="comentarioPelicula">';
            echo '<p class="comentarioUsuario">'.$usuario . ': ' . '</p><p>'. $comentario .'</p></form>';
            echo '</div>';*/
        }

        for ($i=0; $i < count($arrayComentarios); $i++) { 
            echo '<div class="comentarioPelicula">';
            echo '<p class="comentarioUsuario">'.$arrayUsuarios[$i] . ': ' . '</p><p>'. $arrayComentarios[$i] .'</p></form>';
            echo '</div>';
        }
    ?>
    </div>
</body>
</html>