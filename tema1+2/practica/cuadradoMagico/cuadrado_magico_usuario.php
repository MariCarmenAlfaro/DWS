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
    $tablero = [
        [1,  1, 1],
        [3,  5, 7],
        [8,  1, 6]
    ];

    $cuadrado1 = new Cuadrado($tablero);
   // echo $cuadrado1->analizarCuadradoMagico($cuadrado1::$filaPrimera);
    pintarCuadradoMagico($tablero);
  analizarCuadradoMagico($tablero) ;
  /*  print_r( $CuadradoPerfecto->sumarFilas($numeros));
    print_r( $CuadradoPerfecto->sumarColumnas($numeros));
    print_r( $CuadradoPerfecto->sumarDiagonalPrimera($numeros));
    print_r( $CuadradoPerfecto->sumarDiagonalSegunda($numeros));*/


    ?>




</body>

</html>