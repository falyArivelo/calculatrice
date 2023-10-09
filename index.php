<?php

declare(strict_types=1); //strictement typé

function getFullName(string $nom, ?string $prenom = "Babakoto"): ?string
{ // $prenom nullalble , valeur par defaut

    if (!valid($nom)) {
        return "erreur nom";
    }

    if (!$prenom) {
        return mb_strtoupper($nom);
    }

    if (valid($prenom)) {
        return "prenom erreur";
    }

    $nom = mb_strtoupper($nom);
    return "$nom $prenom";
}

function valid($name)
{
    if (empty($nom)) {
        return false;
    }
    if (ctype_alpha($nom)) {
        return false;
    }

    if (preg_match("[!@#$%^&*/,;?:!§%£^¨*+=}{'\()]_@", $name)) {
        return false;
    }

    // [a-z A-Z -.+accent]

    
    return true;
}


// echo getFullName("faly ?",null);
echo getFullName("", null);


// devoir calculatrice , operateur -+*%, n1 ,et n2