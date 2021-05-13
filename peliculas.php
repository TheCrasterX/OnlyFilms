<!DOCTYPE html>
<html lang="es">
    <?php
        include('classBBDD.php');
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>
    <!--AQUI GENERO LA LISTA DE PELICULAS DE ACCION -->
    <?php
    $arrayTitulo = array();
    $sql='SELECT titulo FROM only_films WHERE genero="Accion"';
    $MyBBDD->consulta($sql);
    while ($fila = $MyBBDD->extraer_registro()) {
        foreach ($fila as $indice => $valor) {
            array_push($arrayTitulo, $valor);
        }
    }
    echo'<ul>';
    for ($i=0; $i < count($arrayTitulo); $i++) { 
        echo '<li>'.$arrayTitulo[$i].'</li>';
    }
    echo'</ul>';
    unset($arrayTitulo);
    ?>
    <!--AQUI GENERO LA LISTA DE PELICULAS DE TERROR -->
    <?php
    $arrayTitulo = array();
    $sql='SELECT titulo FROM only_films WHERE genero="Terror"';
    $MyBBDD->consulta($sql);
    while ($fila = $MyBBDD->extraer_registro()) {
        foreach ($fila as $indice => $valor) {
            array_push($arrayTitulo, $valor);
        }
    }
    echo'<ul>';
    for ($i=0; $i < count($arrayTitulo); $i++) { 
        echo '<li>'.$arrayTitulo[$i].'</li>';
    }
    echo'</ul>';
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
    <!--AQUI GENERO LA LISTA DE PELICULAS DE CIENCIA FICCION -->
    <?php
    $arrayTitulo = array();
    $sql='SELECT titulo FROM only_films WHERE genero="Ciencia Ficcion"';
    $MyBBDD->consulta($sql);
    while ($fila = $MyBBDD->extraer_registro()) {
        foreach ($fila as $indice => $valor) {
            array_push($arrayTitulo, $valor);
        }
    }
    echo'<ul>';
    for ($i=0; $i < count($arrayTitulo); $i++) { 
        echo '<li>'.$arrayTitulo[$i].'</li>';
    }
    echo'</ul>';
    unset($arrayTitulo);
    ?>

    <!--AQUI GENERO LA LISTA DE PELICULAS ROMANTICAS -->
    <?php
    $arrayTitulo = array();
    $sql='SELECT titulo FROM only_films WHERE genero="Romantica"';
    $MyBBDD->consulta($sql);
    while ($fila = $MyBBDD->extraer_registro()) {
        foreach ($fila as $indice => $valor) {
            array_push($arrayTitulo, $valor);
        }
    }
    echo'<ul>';
    for ($i=0; $i < count($arrayTitulo); $i++) { 
        echo '<li>'.$arrayTitulo[$i].'</li>';
    }
    echo'</ul>';
    unset($arrayTitulo);
    ?>
</body>
</html>