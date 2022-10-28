<?php
class Cuadrado
{
    private $tablero;
    private $siEsmagico;
    private $sumaFilas;
    private $sumaColumanas;
    private $diagonal1;
    private $diagonal2;
    function __construct($tablero)
    {
        $this->$tablero = $tablero;
    }

}
function analizarCuadradoMagico($tablero)
{


    $arrayFilas =  sumarFilas($tablero);
    $incorrectos = [];

    for ($i = 0; $i < count($arrayFilas); $i++) {
        if ($arrayFilas[$i] != $arrayFilas[0]) {
            $incorrectos[$i] = $arrayFilas[$i];
        }
    }
    echo $incorrectos;

}  

function pintarCuadradoMagico($tablero)
{
    echo '<table>';
    for ($filas = 0; $filas < count($tablero); $filas++) {
        echo '<tr>';
        for ($columnas = 0; $columnas < 3; $columnas++) {
            echo '<td>' . $tablero[$filas][$columnas] . '</td>';
        }
        echo '</tr>';
    }
    echo '<table>';
}

function sumarFilas($tablero/*, &$filaPrimera*/)
{

    $filas = [];
    for ($fila = 0; $fila < count($tablero); $fila++) {
        $suma = 0;
        for ($columna = 0; $columna < count($tablero[$fila]); $columna++) {
            $suma = $suma + $tablero[$fila][$columna] . "\n";
        }
    }

    return $filas;
}


function sumarColumnas($tablero)
{
    $columnas = [];
    for ($columna = 0; $columna < count($tablero); $columna++) {
        $suma = 0;
        for ($fila = 0; $fila < count($tablero[$columna]); $fila++) {

            $suma = $suma + $tablero[$fila][$columna] . "\n";
            $columnas[$columna] = $suma;
        }
    }
    return $columnas;
}

function sumarDiagonalPrimera($tablero)
{
    $suma = 0;
    $contador = (count($tablero) - 1);
    for ($fila = 0; $fila < count($tablero); $fila++) {

        $suma = $suma + $tablero[$contador][$fila] . "\n";
        $contador--;
    }

    return $suma;
}

function sumarDiagonalSegunda($tablero)
{
    $suma = 0;

    for ($fila = 0; $fila < count($tablero); $fila++) {

        $suma = $suma + $tablero[$fila][$fila] . "\n";
    }
    return $suma;
}