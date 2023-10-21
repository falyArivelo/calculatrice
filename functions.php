<?php

declare(strict_types=1); //strictement typé

include('Connection.php');
include('validation.php');


function save(string $nom, ?string $prenom, string $age, string $telephone, string $adresse)
{
    $errors = validatePersonne($nom,  $prenom,  $age, $telephone, $adresse);

    if (empty($errors)) {
        $connection = dbconnect();
        $sql = "INSERT INTO personnes (nom, prenom,age,telephone,adresse) VALUES ('$nom', '$prenom',$age,'$telephone','$adresse')";
        mysqli_query($connection, $sql);
        header('location:index.php');
    } else {
        $errorString = implode("<br>", $errors);
        header("Location: InsertForm.php?errors=$errorString");
    }
}
function update(int $id, string $nom, ?string  $prenom,string $age, string $telephone, string $adresse)
{
    $errors = validatePersonne($nom,  $prenom,  $age, $telephone, $adresse);
    if (empty($errors)) {
        $connection = dbconnect();
        $sql = "UPDATE  personnes set nom = '$nom',prenom = '$prenom',age = '$age',telephone = '$telephone',adresse = '$adresse' where id = $id";
        mysqli_query($connection, $sql);
        header('location:index.php');
    } else {
        $errorString = implode("<br>", $errors);
        header("Location: UpdateForm.php?errors=$errorString");
    }
}


function find() : array
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

function findById(int $id) : array
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

function delete(int $id)
{
    $connection = dbconnect();
    $sql = "DELETE FROM personnes where id = $id";
    mysqli_query($connection, $sql);
}



// find($connection);

// redirection
// liste html
// button modifier et supprimer , et redirection
