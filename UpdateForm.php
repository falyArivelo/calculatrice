<?php
include('functions.php');

$id = $_GET['id'];
$personne = findById($id)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="index.php">list</a></li>
        </ul>
    </nav>
    <form action="Traitement_formulaire.php" method="post">
        <input type="hidden" name="id" value="<?php echo $personne['id'] ?>">
        <input type="text" name="nom" placeholder="nom" value="<?php echo $personne['nom'] ?>">
        <input type="text" name="prenom" placeholder="prenom" value="<?php echo $personne['prenom'] ?>">
        <input type="number" name="age" placeholder="age" value="<?php echo $personne['age'] ?>">
        <input type="text" name="telephone" placeholder="telephone" value="<?php echo $personne['telephone'] ?>">
        <input type="text" name="adresse" placeholder="adresse" value="<?php echo $personne['adresse'] ?>">
        <input type="submit" value="inserer" name="update" >
    </form>
</body>

</html>