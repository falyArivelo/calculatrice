<?php

function validName($name)
{
    return !empty($name) && preg_match('/^[a-zA-Z. -]+$/', $name) && preg_match('/^[^0-9]*$/', $name);
}

function validPrenom($name)
{
    
    return preg_match('/^[a-zA-Z. -]+$/', $name) && preg_match('/^[^0-9]*$/', $name);
}

function getFullName(string $nom, ?string $prenom): bool
{

    if (!$prenom && valid($nom))
        return true;
    else if (validName($nom) && validName($prenom)) {
        return true;
    }
    return false;
}

function validAge($age)
{
    return  !empty($age) && is_numeric($age) && $age > 0 && $age <= 150;
}

function validPhoneNumber($phone)
{
    return !empty($phone) && is_numeric($phone);
}

function validAdress($adress)
{
    return !empty($adress);
}

function validatePersonne($nom,  $prenom,  $age, $telephone, $adresse) : array
{
    $errors = array();

    if (!validName($nom)) {
        $errors['nom'] = "erreur sur le champ nom";
    }
    if (!empty($prenom) && !validPrenom($prenom) ) {
        $errors['prenom'] = "erreur sur le champ prenom";
    }
    if (!validAge($age)) {
        $errors['age'] = "erreur sur le champ age";
    }
    if (!validPhoneNumber($telephone)) {
        $errors['telephone'] = "erreur sur le champ telephone";
    }
    if (!validAdress($adresse)) {
        $errors['adresse'] = "erreur sur le champ adresse";
    }

    return $errors;
}
