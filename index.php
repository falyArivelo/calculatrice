<?php

declare(strict_types=1); //strictement typé

function getFullName(string $nom, ?string $prenom = "Babakoto"): ?string
{ // $prenom nullalble , valeur par defaut

    if (!$prenom) {
        return mb_strtoupper($nom);
    }

    if (!valid($nom) || !valid($prenom)) {
        return "erreur";
    }

    $nom = mb_strtoupper($nom);
    return "$nom $prenom";
}

function valid($name)
{
    return empty($nom) && preg_match('/^[a-zA-ZÀ-ÖØ-öø-ÿ.-]+$/', $name);
}

// echo getFullName("faly ?",null);
echo getFullName("rakotô", null);


// devoir calculatrice , operateur -+*%, n1 ,et n2