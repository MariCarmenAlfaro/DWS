<html>
<head>
    <title>Esto es el titulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <div class="primera_caja">
            <a href="index.php">INICIO</a> <br>
            <a href="pagina1.html">Primera página</a> <br>
            <a href="pagina2.html">Segunda página</a>
        </div>
        <div class="segunda_caja">

            <div class="primera_columna">
            <ul class="listaAct">
                <li class="act"> <a href="hola_mundo.php">Prueba Hola Mundo</a> </li>
                    <li class="act"> <a href="hola_mundo_comentarios.php">Probando comentarios</a></li>
                </ul>
            </div>
            <div class="segunda_columna"> <p>
                <?php
                    echo "Hola mundo!";
                    ECHO "Hola Mundo! <br>";
                    print "pasa1 :) ";

                    //Una variable

                    $color ="rojo";
                    echo "Mi coche es ". $color . "<br>";
                    //Esto es uncomentario de una linea
                    /*Comentario de varias lineas
                    Primera linea
                    Segunda linea
                    
                    */
                ?>
                </p></div>
            <div class="tercera_columna">assas</div>
            


        </div>
        <div class="tercera_caja">ccc</div>
        <div class="pieDePagina">Pie de página</div>
    <div>
</body>
</html>

