<?php

declare(strict_types=1); //strictement typé

include('Connection.php');



function getFullName(string $nom, ?string $prenom): bool
{

    if (!$prenom && valid($nom))
        return true;
    else if (valid($nom) && valid($prenom)) {
        return true;
    }
    return false;
}

function valid($name)
{
    return !empty($name) && preg_match('/^[a-zA-Z. -]+$/', $name) && preg_match('/^[^0-9]*$/', $name);
}

function save($nom, $prenom, $age, $telephone, $adresse)
{
    $connection = dbconnect();
    if (getFullName($nom, $prenom)) {
        $sql = "INSERT INTO personnes (nom, prenom,age,telephone,adresse) VALUES ('$nom', '$prenom',$age,'$telephone','$adresse')";
        mysqli_query($connection, $sql);
    } else {
        echo "erreur";
    }
}

function find()
{
    $connection = dbconnect();

    $sql = "SELECT * FROM personnes";
    $results = mysqli_query($connection, $sql);
    $personnes = [];
    while ($result = mysqli_fetch_assoc($results)) {
        $personnes[] = $result;
    }
    return $personnes;
}

function findById($id)
{
    $connection = dbconnect();

    $sql = "SELECT * FROM personnes where id ='$id'";
    $results = mysqli_query($connection, $sql);
    $personne = null;
    if ($result = mysqli_fetch_assoc($results)) {
        $personne = $result;
    }
    return $personne;
}

function delete($id)
{
    $connection = dbconnect();

    $sql = "DELETE FROM personnes where id = $id";
    mysqli_query($connection, $sql);
}

function update($id, $nom, $prenom, $age, $telephone, $adresse)
{
    $connection = dbconnect();

    $sql = "UPDATE  personnes set nom = '$nom',prenom = '$prenom',age = '$age',telephone = '$telephone',adresse = '$adresse' where id = $id";
    mysqli_query($connection, $sql);
}

// find($connection);

// redirection
// liste html
// button modifier et supprimer , et redirection
