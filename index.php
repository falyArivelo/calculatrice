<?php
include('functions.php');

$personnes = find();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="InsertForm.php">Insertion</a></li>
        </ul>
    </nav>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Telephone</th>
            <th>Adresse</th>


        </tr>
        <?php
        foreach ($personnes as $personne) { ?>
            <tr>
                <td> <?php echo $personne['nom'] ?></td>
                <td><?php echo $personne['prenom'] ?></td>
                <td><?php echo $personne['age'] ?></td>
                <td><?php echo $personne['telephone'] ?></td>
                <td><?php echo $personne['adresse'] ?></td>
                <td><a href="UpdateForm.php?id=<?php echo $personne['id'] ?>">update</a></td>
                <td><a href="Traitement_formulaire.php?delete&id=<?php echo $personne['id'] ?>">delete</a></td>



            </tr>
        <?php } ?>

    </table>



</body>

</html>