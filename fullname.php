<?php

declare(strict_types=1); //strictement typé

$connection = mysqli_connect('localhost', 'root', '', 'dtc');

if (!$connection) {
    die("impossible de se connecter a la base");
}

function save($connection, $nom, $prenom, $age, $telephone, $adresse)
{
    if (getFullName($nom, $prenom)) {
        $sql = "INSERT INTO php (nom, prenom,age,telephone,adresse) VALUES ('$nom', '$prenom',$age,'$telephone','$adresse')";
        mysqli_query($connection, $sql);
    } else {
        echo "erreur";
    }
}
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];


save($connection, $nom, $prenom, $age, $telephone, $adresse);

function getFullName(string $nom, ?string $prenom): bool
{ // $prenom nullalble , valeur par defaut

    if (!$prenom && valid($nom))
        return true;
    // return mb_strtoupper($nom);
    else if (valid($nom) && valid($prenom)) {
        return true;
        // $nom = mb_strtoupper($nom);
        // return "$nom $prenom";
    }
    // return "erreur";
    return false;
}

function valid($name)
{
    return !empty($name) && preg_match('/^[a-zA-Z. -]+$/', $name) && preg_match('/^[^0-9]*$/', $name);
}

// echo getFullName("faly ?",null);
echo getFullName("rakoto", "faly ar");
