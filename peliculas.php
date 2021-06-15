<!DOCTYPE html>
<html lang="es">
<?php
include('classBBDD.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos_peliculas.css">
    <link rel="icon" type="image/png" href="favicon.ico">
    <title>Peliculas / Onlyfilms</title>
</head>

<body id="bodyPelis">
    <div class="navegador">
        <nav class="navUno">
            <img class="logo" src="logo.png">
            <p><a href="index.php">Inicio</a></p>
            <p><a href="perfil.php">Perfil</a></p>
            <p><a href="peliculas.php">Películas</a></p>
            <p><img class="mensaje" src="lupa.png"></p>
            <p><img class="mensaje" src="https://i.ibb.co/8jmyjVg/bell-2.png"></p>
            <p><a href="login.php">Cerrar Sesión</a></p>
        </nav>
    </div>
    <div id="divTablas">
    <table class="tablaPelis">
        <!--AQUI GENERO LA LISTA DE PELICULAS DE ACCION -->
        <th>PELÍCULAS DE ACCIÓN</th>
        <?php
        $arrayTitulo = array();
        $sql = 'SELECT * FROM only_films WHERE genero="Accion"';
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            $id = $fila['id'];
            $titulo = $fila['Titulo'];
            echo "<tr><td><a href='pelicula.php?id=$id';>$titulo</a></td></tr>";
        }
        unset($arrayTitulo);
        ?>
    </table>

    <table class="tablaPelis">
        <!--AQUI GENERO LA LISTA DE PELICULAS DE TERROR -->
        <th>PELÍCULAS DE TERROR</th>
        <?php
        $arrayTitulo = array();
        $sql = 'SELECT * FROM only_films WHERE genero="Terror"';
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            $id = $fila['id'];
            $titulo = $fila['Titulo'];
            echo "<tr><td><a href='pelicula.php?id=$id';>$titulo</a></td></tr>";
        }
        ?>
    </table>
    <table class="tablaPelis">
        <!--AQUI GENERO LA LISTA DE PELICULAS DE CIENCIA FICCION -->
        <th>PELÍCULAS DE FICCIÓN</th>
        <?php
        $arrayTitulo = array();
        $sql = 'SELECT * FROM only_films WHERE genero="Ciencia Ficcion"';
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            $id = $fila['id'];
            $titulo = $fila['Titulo'];
            echo "<tr><td><a href='pelicula.php?id=$id';>$titulo</a></td></tr>";
        }
        unset($arrayTitulo);
        ?>
    </table>
    <table class="tablaPelis">
        <!--AQUI GENERO LA LISTA DE PELICULAS ROMANTICAS -->
        <th>PELÍCULAS ROMANTICAS</th>
        <?php
        $arrayTitulo = array();
        $sql = 'SELECT * FROM only_films WHERE genero="Romantica"';
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            $id = $fila['id'];
            $titulo = $fila['Titulo'];
            echo "<tr><td><a href='pelicula.php?id=$id';>$titulo</a></td></tr>";
        }
        unset($arrayTitulo);
        ?>
    </table>
    <table class="tablaPelis">
        <!--AQUI GENERO LA LISTA DE PELICULAS MUSICALES -->
        <th>MUSICALES</th>
        <?php
        $arrayTitulo = array();
        $sql = 'SELECT * FROM only_films WHERE genero="Musical"';
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            $id = $fila['id'];
            $titulo = $fila['Titulo'];
            echo "<tr><td><a href='pelicula.php?id=$id';>$titulo</a></td></tr>";
        }
        unset($arrayTitulo);
        ?>
    </table>
    <table class="tablaPelis">
        <!--AQUI GENERO LA LISTA DE PELICULAS DE MISTERIO -->
        <th>PELICULAS DE MISTERIO</th>
        <?php
        $arrayTitulo = array();
        $sql = 'SELECT * FROM only_films WHERE genero="Misterio"';
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            $id = $fila['id'];
            $titulo = $fila['Titulo'];
            echo "<tr><td><a href='pelicula.php?id=$id';>$titulo</a></td></tr>";
        }
        unset($arrayTitulo);
        ?>
    </table>
    </div>
</body>

</html>