<?php
include('functions.php');

if (isset($_POST['save'])) {
    $nom = mb_strtoupper($_POST['nom']);
    $prenom = empty($_POST['prenom']) ? null : $_POST['prenom'];
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];

    save($nom, $prenom, $age, $telephone, $adresse);
}

if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];

    update($id, $nom, $prenom, $age, $telephone, $adresse);
}

if (isset($_GET['delete'])) {
    $id = intval($_GET['id']);
    delete($id);
    header('location:index.php');
}
