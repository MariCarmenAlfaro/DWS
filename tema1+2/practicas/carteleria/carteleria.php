<?php
class Pelicula
{
    public $titulo;
    public $descripcion;
    public $imagen;
    function __construct()
    {
    }

    function pintarPeli()
    {
        echo "<div class='contenedor'>;
        echo "<div class='imagen'> Hola </div>";

        echo "<div class=''>    </div>";
        echo  "<div class='descripcion'>";
        echo "</div>";
    }
}
