<?php

declare(strict_types=1);

function calcul(string $n1, string $operator, string $n2)
{
    if (validNumber($n1) && validNumber($n2) && isValidOperator($operator)) {
        $resultat = 0;
        eval("\$resultat = $n1 $operator $n2;");
        return $resultat;
    }
    return "impossible";
}

function validNumber($str)
{
    return !empty($str) && is_numeric($str);
}

function isValidOperator($op): bool
{
    return strlen($op) === 1 && preg_match("/[-+\/\*]/", $op);
}

echo calcul("2", "*", "2");
