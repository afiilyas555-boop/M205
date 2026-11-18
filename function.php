<?php 
     function adition(int $a, int $b):int{
        return $a+$b ; 
    }

    $resultat = adition(2,4);
    echo "resultat est :".$resultat ;


    


function soustraire(float $a, float $b): float {
    return $a - $b;
}

    $resultat = soustraire(2,4);
    echo "resultat est :".$resultat ;
function multiplier(float $a, float $b): float {
    return $a * $b;
}

    $resultat = multiplier(2,4);
    echo "resultat est :".$resultat ;
function diviser(float $a, float $b): float {

    if ($b == 0) {
        throw new InvalidArgumentException("Division par zéro impossible");
    }

    return $a / $b;
}

    $resultat = diviser(2,4);
    echo "resultat est :".$resultat ;


?>