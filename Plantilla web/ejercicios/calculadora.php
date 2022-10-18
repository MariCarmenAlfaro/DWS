
<?php

use LDAP\Result;


class Calculadora
{
    public $numeroA;
    public $numeroB;

    public function __construct()
    {
    }
    public function calculoFactorial($numeroA)
    {
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);
        $result = 0;
        try {

            if ($numeroA == 0) {
                return 1;
            } elseif ($numeroA > 0) {
                $result = 1;
                while ($numeroA > 0) {
                    $result = $result * $numeroA;
                    $numeroA = $numeroA - 1;
                }
                return $result;
            } else {
                return 'Debe ser mayor que 0';
            }
        } catch (ValueError $e) {
            echo "ERROR: " . $e;
        }
    }


    public function coeficienteBinomial($n, $k)
    {
       $resultado=0;
        if (($n - $k) < 0) {
           return $resultado;
        } else {
           $resultado= $this->calculoFactorial($n) / $this->calculoFactorial($k) * $this->calculoFactorial($n - $k);
        }
        return $resultado;
    }

    public function convierteBinarioDecimal($cadenaBits){
        
    }
}
