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
    <?php
    $arrayTitulo = array();
    $sql='SELECT titulo FROM only_films';
    $MyBBDD->consulta($sql);
    while ($fila = $MyBBDD->extraer_registro()) {
        foreach ($fila as $indice => $valor) {
            array_push($arrayTitulo, $valor);
        }
    }
    for ($i=0; $i < count($arrayTitulo); $i++) { 
        echo $arrayTitulo[$i];
        echo '<br>';
    }
    ?>
</body>
</html>