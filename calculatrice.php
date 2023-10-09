<?php

declare(strict_types=1);

function calcul(string $n1, string $operator ,string $n2)
{
    if(validNumber($n1) && validNumber($n2) && isValidOperator($operator)){
        $expression = "$n1 $operator $n2";
        $resultat=0 ;
        eval("\$resultat = $expression;");
        return $resultat;
    }

    return "impossible";
}

function validNumber($str)
{
    $str = trim($str);
    if(!empty($str)){
        if(is_numeric($str)){
            return true;
        }
    }
}

function isValidOperator($op) : bool {
    if(strlen($op)==1){
        if (preg_match("/[-+\/\*]/", $op)) {
            return true;
        } 
    }
    return false;
}

echo calcul("2","*","2");