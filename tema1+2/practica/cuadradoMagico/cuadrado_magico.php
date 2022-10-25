<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado Mágico</title>
    <link rel="stylesheet" href="estilos_cuadrado_magico.css">
</head>

<body>
    <h1>CUADRADO MÁGICO</h1>
    <?php

    $numeros = array(
        array(7,  2, 1),
        array(2,  3, 2),
        array(1,  3, 5)
    );
    pintarCuadradoMagico($numeros);
    echo '<table>';
    for ($filas= 0; $filas < count($numeros[$filas]); $filas++) {
        echo '<tr>';
        for ($columnas = 0; $columnas < count($numeros[$filas][$columnas]); $columnas++) {
            echo '<td>' . $numeros[$filas][$columnas] . '</td>';
        }
        echo '</tr>';
    }
    echo '<table>';
    function analizarCuadradoMagico($numeros)
    {
       


        return;
    }
    function pintarCuadradoMagico($numeros)
    {


        
    }


    ?>







</body>

</html>