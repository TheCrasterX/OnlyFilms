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
            <?php
            $idPelicula = $_GET['id'];
            $sql = "SELECT titulo FROM only_films WHERE id= $idPelicula";
            $MyBBDD->consulta($sql);
            while ($fila = $MyBBDD->extraer_registro()) {
                $titulo = $fila['titulo'];
                echo "<h1>$titulo</h1>";
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
            /*$arrayImagenes = array();
    $sql='SELECT Foto FROM only_films';
    $MyBBDD->consulta($sql);
    while ($fila = $MyBBDD->extraer_registro()) {
        foreach ($fila as $indice => $valor) {
            array_push($arrayImagenes, $valor);
        }
    }*/
        /*for ($i=0; $i < count($arrayImagenes); $i++) { 
        echo '<img src="'.$arrayImagenes[$i].'">';
    }*/
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
    <?php
        $idPelicula = $_GET['id'];
        $sql = "SELECT comentario FROM only_post
        where id_peli = " . $idPelicula;
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            $comentario = $fila['comentario'];
            echo '<p>'. $comentario .'</p>';
        }

        if(isset($_POST['publicar'])) {
            $idPelicula = $_GET['id'];
            var_dump($idPelicula);
            $publicacion = $_POST['publicacion'];
            $sql = "INSERT INTO 'only_post'('usuario', 'comentario', 'id_peli') VALUES ('".$_SESSION['UsuarioIniciado']."', '". $publicacion ."','". $idPelicula ."')";
            $MyBBDD->consulta($sql);
            unset($publicacion);
        }

    ?>
    </div>
</body>

</html>