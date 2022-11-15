<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula</title>
    <link rel="stylesheet" href="estilos_barbie.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">
</head>

<body>
    <div class="contenedor">
        <div class="barraNavegacion">
            <a href="categorias.php">Inicio</a>

        </div>
        <div class="cuerpo">

            <div class="indiceIzq">Indice izquierdo</div>
            <div class="datosPag"><?php
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

                                            echo "<div class='imagen'>'<img src=" . $this->imagen . "/div>'  </div>";
                                            echo "<br/>";
                                            echo "<div class='titulo'>" . $this->titulo . "   </div>";
                                            echo "<br/>";
                                            echo  "<div class='descripcion'>" . $this->descripcion . "  </div>";
                                            echo "<br/>";
                                            echo "Duración: ";
                                            echo "<p class='votos'>Votos:</p> ";
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
                                            return $this->titulo;
                                        }
                                        public function setDescripcion($descripcion)
                                        {
                                            return $this->titulo;
                                        }
                                    }
                                    $peli = new Pelicula("Barbie en La princesa y la costurera", "La mítica muñeca Barbie cobra vida en esta moderna versión del cuento de Mark Twain \"El Príncipe y el Mendigo\" sobre un error de identidad y el poder de la amistad. Con la voz de Gisela como Barbie cantando siete temas originales llega la primera película musical de Barbie interpretando además un doble papel.", "imgs/img1.jpg");
                                    $peli->pintarPeli();
                                    $peli = new Pelicula("Barbie en La princesa y la costurera", "La mítica muñeca Barbie cobra vida en esta moderna versión del cuento de Mark Twain \"El Príncipe y el Mendigo\" sobre un error de identidad y el poder de la amistad. Con la voz de Gisela como Barbie cantando siete temas originales llega la primera película musical de Barbie interpretando además un doble papel.", "imgs/img1.jpg");
                                    $peli->pintarPeli();
                                    ?></div>
            <div class="indiceDerecho">Indice derecho</div>



        </div>
        <div class="piePag">Pie de pagina</div>
    </div>
</body>

</html>