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
                    echo 'Resultado de la función factorial: '.$prueba1->calculoFactorial(4);
                    echo '<br/>';
                    echo 'Resultado de coeficiente binimial: '.$prueba1->coeficienteBinomial(4, 3);

                 ?>
           </p></div>
            <div class="tercera_columna"></div>
            


        </div>
        <div class="tercera_caja"></div>
        <div class="pieDePagina">Pie de página</div>
    <div>
</body>
</html>