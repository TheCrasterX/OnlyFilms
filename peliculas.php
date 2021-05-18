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
    <title>Peliculas</title>
</head>

<body id="bodyPelis">
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
    <div id="divTablas">
    <table class="tablaPelis">
        <!--AQUI GENERO LA LISTA DE PELICULAS DE ACCION -->
        <th>PELÍCULAS DE ACCIÓN</th>
        <?php
        $arrayTitulo = array();
        $sql = 'SELECT titulo FROM only_films WHERE genero="Accion"';
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            foreach ($fila as $indice => $valor) {
                array_push($arrayTitulo, $valor);
            }
        }
        echo '<form action="classBBDD.php" method="post">';
        for ($i = 0; $i < count($arrayTitulo); $i++) {
            echo '<tr><td><a href="pelicula.html">' . $arrayTitulo[$i] . '</td></tr>';
        }
        unset($arrayTitulo);
        ?>
    </table>

    <table class="tablaPelis">
        <!--AQUI GENERO LA LISTA DE PELICULAS DE TERROR -->
        <th>PELÍCULAS DE TERROR</th>
        <?php
        $arrayTitulo = array();
        $sql = 'SELECT titulo FROM only_films WHERE genero="Terror"';
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            foreach ($fila as $indice => $valor) {
                array_push($arrayTitulo, $valor);
            }
        }
        echo '<form action="classBBDD.php" method="post">';
        for ($i = 0; $i < count($arrayTitulo); $i++) {
            echo '<tr><td><a href="pelicula.html">' . $arrayTitulo[$i] . '</td></tr>';
        }
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
    </table>
    <table class="tablaPelis">
        <!--AQUI GENERO LA LISTA DE PELICULAS DE CIENCIA FICCION -->
        <th>PELÍCULAS DE FICCIÓN</th>
        <?php
        $arrayTitulo = array();
        $sql = 'SELECT titulo FROM only_films WHERE genero="Ciencia Ficcion"';
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            foreach ($fila as $indice => $valor) {
                array_push($arrayTitulo, $valor);
            }
        }
        echo '<form action="classBBDD.php" method="post">';
        for ($i = 0; $i < count($arrayTitulo); $i++) {
            echo '<tr><td><a href="pelicula.html">' . $arrayTitulo[$i] . '</td></tr>';
        }
        unset($arrayTitulo);
        ?>
    </table>
    <table class="tablaPelis">
        <!--AQUI GENERO LA LISTA DE PELICULAS ROMANTICAS -->
        <th>PELÍCULAS ROMANTICAS</th>
        <?php
        $arrayTitulo = array();
        $sql = 'SELECT titulo FROM only_films WHERE genero="Romantica"';
        $MyBBDD->consulta($sql);
        while ($fila = $MyBBDD->extraer_registro()) {
            foreach ($fila as $indice => $valor) {
                array_push($arrayTitulo, $valor);
            }
        }
        echo '<form action="classBBDD.php" method="post">';
        for ($i = 0; $i < count($arrayTitulo); $i++) {
            echo '<tr><td><a href="pelicula.html">' . $arrayTitulo[$i] . '</td></tr>';
        }
        unset($arrayTitulo);
        ?>
    </table>
    </div>
</body>

</html>