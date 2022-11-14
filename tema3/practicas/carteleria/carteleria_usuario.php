<html>

<head>
    <title>CARTELERÍA</title>
<script language="javascript">alert("juas");</script>';
    <link rel="stylesheet" href="estilos_barbie.css">
</head>

<body>

    <div class="contenedor">
        <div class="primera_caja">
            <a href="0_index.php">INICIO</a> <br>
            <p>Elige el género cinematográfico.</p>
                <form>
                    <select id="generos" name="generos">
                        <option value="Terror">Terror</option>
                        <option value="Barbie">Barbie</option>
                       
                    </select>
                </form>
        </div>
        <div class="segunda_caja">

            <div class="primera_columna">
                <ul class="listaAct">
                    <li class="act"> <a href="">Peliculas de Terror</a></li>
                    <li class="act"> <a href="">Peliculas de Barbie</a></li>


                </ul>
            </div>
            <div class="segunda_columna">
                <p>
              
                <?php
                require('peliculas.php');
                $peli = new Pelicula("Barbie en La princesa y la costurera", "La mítica muñeca Barbie cobra vida en esta moderna versión del cuento de Mark Twain \"El Príncipe y el Mendigo\" sobre un error de identidad y el poder de la amistad. Con la voz de Gisela como Barbie cantando siete temas originales llega la primera película musical de Barbie interpretando además un doble papel.", "imgs/img1.jpg");
                $peli->pintarPeli();
                ?>
                </p>
            </div>
            <div class="tercera_columna">
                <3< /div>



            </div>
            <div class="tercera_caja">
                <3< /div>
                    <div class="pieDePagina">Pie de página</div>
                    <div>
</body>

</html>