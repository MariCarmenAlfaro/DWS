<?php
class Pelicula
{
    public $titulo;
    public $descripcion;
    public $imagen;
    function __construct()
    {
        $this->pintarPeli();
    }

    function pintarPeli()
    {
        echo "<div class=''>";
        echo "<div class='imagen'> Hola </div>";


        echo "<div class=''>    </div>";
        echo  "<div class='descripcion'>";
        echo "</div>";
    }
}
$peli1= new Pelicula();