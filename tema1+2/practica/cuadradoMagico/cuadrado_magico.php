<?php
class Cuadrado
{
    public $tablero;
    public $siEsmagico = true;
    public $sumaFilas = true;
    public $filaIncorrecta;
    public $sumaColumnas = true;
    public $columnaIncorrecta;
    public $diagonal1 = true;
    public $diagonal1Incorrecta;
    public $diagonal2 = true;
    public $diagonal2Incorrecta;
    function __construct($tablero)
    {
        $this->$tablero = $tablero;
    }
}
function analizarCuadradoMagico($tablero)
{
    $cuadradoFinal = new Cuadrado($tablero);

    $arrayFilas =  sumarFilas($tablero);
    $cuadradoFinal->filaIncorrecta = [];
    $filaLider=0;
    for ($i = 0; $i < count($tablero); $i++) {
        $filaLider=$arrayFilas[0];
        if ($arrayFilas[$i] != $filaLider) {
            $cuadradoFinal->sumaFilas = false;
            $cuadradoFinal->filaIncorrecta[$i] = $arrayFilas[$i];
        }
    }
   
    $arrayColumnas = sumarColumnas($tablero);
    $cuadradoFinal->columnaIncorrecta = [];
    for ($i = 0; $i < count($tablero); $i++) {
        if ($arrayColumnas[$i] != $filaLider) {
            $cuadradoFinal->sumaColumnas = false;
            $cuadradoFinal->columnaIncorrecta[$i]=$arrayColumnas[$i];
        }
    }
    
    $diagonal1 = sumarDiagonalPrimera($tablero);
    if ($diagonal1 != $filaLider) {
        $cuadradoFinal->diagonal1 = false;
       
    }

    $diagonal2 = sumarDiagonalSegunda($tablero);
    if ($diagonal2[$i] != $filaLider) {
        $cuadradoFinal->diagonal2 = false;
        
    }

    if (
        $cuadradoFinal->sumaFilas == true && $cuadradoFinal->sumaColumnas == true &&
        $cuadradoFinal->diagonal1 == true && $cuadradoFinal->diagonal2 == true
    ) {
        $cuadradoFinal->siEsmagico = true;
    } else {
        $cuadradoFinal->siEsmagico = false;
    }

    //echo $cuadradoFinal->siEsmagico;
    return $cuadradoFinal;
}

function pintarCuadradoMagico($tablero, $cuadradoFinal)
{
    echo '<table>';
    for ($filas = 0; $filas < count($tablero); $filas++) {
        echo '<tr>';
        for ($columnas = 0; $columnas < count($tablero[$filas]); $columnas++) {
            echo '<td>' . $tablero[$filas][$columnas] . '</td>';
        }
        echo '</tr>';
    }
    echo '<table>';
   // echo $cuadradoFinal->s
   if($cuadradoFinal->siEsmagico){
    echo "<p class='esMagico'>SI ES UN CUADRADO MAGICO</p>";
   }else{
    echo "<p class='noEsMagico'>NO ES UN CUADRADO MAGICO</p>";
    if($cuadradoFinal->sumaFilas==false){
        echo "Las filas incorrectas son ".$cuadradoFinal->filaIncorrecta[];
    } 
   }
}

function sumarFilas($tablero)
{

    $filas = [];
    for ($fila = 0; $fila < count($tablero); $fila++) {
        $suma = 0;
        for ($columna = 0; $columna < count($tablero[$fila]); $columna++) {
            $suma = $suma + $tablero[$fila][$columna] . "\n";
        }
        $filas[$fila] = $suma;
    }

    return $filas;
}


function sumarColumnas($tablero)
{
    $columnas = [];
    for ($columna = 0; $columna < count($tablero); $columna++) {
        $suma = 0;
        for ($fila = 0; $fila < count($tablero[$columna]); $fila++) {

            $suma = $suma + $tablero[$fila][$columna];
        }
        $columnas[$columna] = $suma;
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
