<?php
include('functions.php');

if (isset($_POST['save'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];

    save($nom, $prenom, $age, $telephone, $adresse);
    header('location:index.php');
}


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];

    update($id, $nom, $prenom, $age, $telephone, $adresse);
    header('location:index.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    delete($id);
    header('location:index.php');
}
