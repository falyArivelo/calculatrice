<?php

declare(strict_types=1); //strictement typé

$connection = mysqli_connect('localhost', 'root', '', 'dtc');

if (!$connection) {
    die("impossible de se connecter a la base");
}

function find($connection)
{
    $sql = "SELECT * FROM php";
    $results = mysqli_query($connection, $sql);
    while ($result = mysqli_fetch_assoc($results)) {
        echo $result['nom'].' '.$result['prenom'].'<br>';
    }
}

find($connection);

// redirection
// liste html
// button modifier et supprimer , et redirection
