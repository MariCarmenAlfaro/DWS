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
    require('cuadrado_magico.php');
    $numeros = [
        [1,  1, 1],
        [3,  5, 7],
        [8,  1, 6]
    ];

    $cuadrado1 = new Cuadrado();
   // echo $cuadrado1->analizarCuadradoMagico($cuadrado1::$filaPrimera);
    $cuadrado1->pintarCuadradoMagico($numeros);
    print_r($cuadrado1->sumarFilas($numeros)) ;
    print_r($cuadrado1->sumarColumnas($numeros)) ;
    ?>




</body>

</html>