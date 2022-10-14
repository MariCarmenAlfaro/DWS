import math
<?php

use LDAP\Result;

ini_set('display_errors', 'On');
ini_set('html_errors', 0);
function calculoFactorial($numero)
{
    $result=0;
    try{
        
        if($numero==0)
        {
            return 1;
        }
        elseif($numero>0)
        {
            while($numero>0)
            {
                $result=$result*$numero;
            }
            return $result;
        }else{
            return 'Debe ser mayor que 0';
        }
       echo $result;
       
    }
    catch(ValueError $e)
    {
    echo "ERROR: ".$e;
    }
}






