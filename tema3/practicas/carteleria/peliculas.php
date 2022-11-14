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

        echo "<div class='imagen'>'<img src=" . $this->imagen. "/>'  </div>";
        echo "<br/>";
        echo "<div class='titulo'>" . $this->titulo . "   </div>";
        echo "<br/>";
        echo  "<div class='descripcion'>" . $this->descripcion . "  </div>";

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
