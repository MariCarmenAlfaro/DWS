<html>

<head>
    <title>Esto es el titulo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="contenedor">
        <div class="primera_caja">

        </div>
        <div class="segunda_caja">

            <div class="primera_columna">
                <ul class="listaAct">

                </ul>
            </div>
            <div class="segunda_columna">
                <p>
                    <?php
                    require('calculadora.php');

                    $prueba1 = new Calculadora();
                    echo 'Resultado de la función factorial: ' . $prueba1->calculoFactorial(4);
                    echo '<br/>';
                    echo 'Resultado de coeficiente binimial: ' . $prueba1->coeficienteBinomial(4, 3);
                    echo '<br/>';
                    echo 'Tu número binario en decimal: ' . $prueba1->convierteBinarioDecimal('011101');
                    echo '<br/>';
                    $array = array(2, 3, 5, 7, 8,9, 6, 10);
                    echo 'Número total de pares en el array: ' . $prueba1->sumaNumerosPares($array);
                    echo '<br/>';
                    echo 'Saber si es capicua o no: ' . $prueba1->siCapcua("hfd");
                    echo '<br/>';
                    $primera_matriz=array(
                        array(5,4,9,6),
                        array(2,8,9,6)
                      );
                    $segunda_matriz=array(array(4,9,67,100),array(85,9,67,8));
                    echo 'Matriz final: ' . $prueba1->sumaMatrices($primera_matriz,$segunda_matriz);
                    ?>
                </p>
            </div>
            <div class="tercera_columna"></div>



        </div>
        <div class="tercera_caja"></div>
        <div class="pieDePagina">Pie de página</div>
        <div>
</body>

</html>