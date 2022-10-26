<?php
class Cuadrado{
public $filaPrimera=0;
function analizarCuadradoMagico(&$filaPrimera)
{

return $filaPrimera;
    
}
function pintarCuadradoMagico($numeros)
{
    echo '<table>';
    for ($filas = 0; $filas < count($numeros); $filas++) {
        echo '<tr>';
        for ($columnas = 0; $columnas < 3; $columnas++) {
            echo '<td>' . $numeros[$filas][$columnas] . '</td>';
        }
        echo '</tr>';
    }
    echo '<table>';
    
}
function sumarFilas($numeros/*, &$filaPrimera*/)
{ 
    
    $filas=[];
    for ($fila = 0; $fila < count($numeros); $fila++) {
        $suma = 0;
        for ($columna = 0; $columna < count($numeros[$fila]); $columna++) {
            $suma = $suma + $numeros[$fila][$columna] . "\n";
        }
        /*
        if($fila==0){
            $filaPrimera=$suma;
            echo $suma;
        }*/
        $filas[$fila]=$suma;
    }
    return $filas;
}
function sumarColumnas($numeros)
{  
    $columnas=[];
    for ($columna = 0; $columna < count($numeros); $columna++) {
        $suma = 0;
        for ($fila = 0; $fila < count($numeros[$columna]); $fila++) {
          
            $suma = $suma + $numeros[$fila][$columna] . "\n";
              $columnas[$columna] =$suma;
        }

    }
    return $columnas;
}
}
