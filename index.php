<?php

declare(strict_types=1); //strictement typé

function getFullName(string $nom, ?string $prenom): ?string
{ // $prenom nullalble , valeur par defaut

    if (!$prenom && valid($nom))
        return mb_strtoupper($nom);
    else if (valid($nom) && valid($prenom)) {
        $nom = mb_strtoupper($nom);
        return "$nom $prenom";
    }
    return "erreur";
}

function valid($name)
{
    return !empty($name) && preg_match('/^[a-zA-Z. -]+$/', $name) && preg_match('/^[^0-9]*$/', $name);
}

// echo getFullName("faly ?",null);
echo getFullName("rakoto", "faly ar");
