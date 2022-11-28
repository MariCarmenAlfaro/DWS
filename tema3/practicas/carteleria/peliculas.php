<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Sevillana&display=swap" rel="stylesheet">

    <?php
    if ($_GET["genero"] === "terror") {
        echo  "<link rel=stylesheet href=estilos_terror.css>";
    } elseif ($_GET["genero"] === "barbie") {
        echo "<link rel=stylesheet href=estilos_barbie.css>";
    }
    ?>


</head>

<body>
    <div class="contenedor">
        <div class="barraNavegacion">
            <a href="categorias.php" class="inicio">Inicio</a>

        </div>
        <div class="cuerpo">
            <?php
                                    class Pelicula
                                    {
                                        public $titulo;
                                        public $descripcion;
                                        public $imagen;
                                        function __construct($titulo, $descripcion, $imagen)
                                        {
                                            $this->titulo = $titulo;
                                            $this->descripcion = $descripcion;
                                            $this->imagen = $imagen;
                                        }
                                        function pintarPeli()
                                        {

                                            echo "<div class='individuales'>";

                                            echo "<div class='titulo'>" . $this->titulo . "   </div>";

                                            echo "<p class='votos'>Votos:</p> ";

                                            echo "<br/>";

                                            echo "<div ><img class='imagen'  src=" . $this->imagen . "></div>";

                                            echo "<br/>";

                                            echo  "<div class='descripcion'>" . $this->descripcion . "</div>";

                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "Duración: ";
                                            echo "<a href='fichaPelicula.php' class='fichaGrande'> Ver ficha</a> ";

                                            echo "</div>";
                                        }

                                        public function getTitulo()
                                        {
                                            return $this->titulo;
                                        }
                                        public function setTitulo($titulo)
                                        {
                                            return $this->titulo;
                                        }
                                        public function getImagen()
                                        {
                                            return $this->imagen;
                                        }
                                        public function setImagen($imagen)
                                        {
                                            return $this->titulo;
                                        }
                                        public function getDescripcion()
                                        {
                                            return $this->descripcion;
                                        }
                                        public function setDescripcion($descripcion)
                                        {
                                            return $this->descripcion;
                                        }
                                    }
                                    $peli = new Pelicula("Barbie en La princesa y la costurera", "La mítica muñeca Barbie cobra vida en esta moderna versión del cuento de Mark Twain \"El Príncipe y el Mendigo\" sobre un error de identidad y el poder de la amistad. Con la voz de Gisela como Barbie cantando siete temas originales llega la primera película musical de Barbie interpretando además un doble papel.", "imgs/img1.jpg");
                                    $peli->pintarPeli();
                                    $peli = new Pelicula("Barbie en La princesa y la costurera", "La mítica muñeca Barbie cobra vida en esta moderna versión del cuento de Mark Twain \"El Príncipe y el Mendigo\" sobre un error de identidad y el poder de la amistad. Con la voz de Gisela como Barbie cantando siete temas originales llega la primera película musical de Barbie interpretando además un doble papel.", "imgs/img1.jpg");
                                    $peli->pintarPeli();
                                    $peli = new Pelicula("Barbie en La princesa y la costurera", "La mítica muñeca Barbie cobra vida en esta moderna versión del cuento de Mark Twain \"El Príncipe y el Mendigo\" sobre un error de identidad y el poder de la amistad. Con la voz de Gisela como Barbie cantando siete temas originales llega la primera película musical de Barbie interpretando además un doble papel.", "imgs/img1.jpg");
                                    $peli->pintarPeli();


                                    $conexion = mysqli_connect('localhost', 'root', '12345');
                                    mysqli_select_db($conexion, 'carteleria');
                                    $consulta = "SELECT * FROM T_Pelicula;";
                                    $resultado = mysqli_query($conexion, $consulta);
                                    if (!$resultado) {
                                        $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
                                        $mensaje .= 'Consulta realizada: ' . $consulta;
                                        die($mensaje);
                                    } else {
                                        echo "Conexion OK" . "<br>";

                                        while ($registro = mysqli_fetch_assoc($resultado)) {
                                            echo $registro['titulo'] . "<br>";
                                        }
                                    }
                                    ?>
      
            



        </div>
        <div class="piePag"></div>
    </div>
</body>

</html>