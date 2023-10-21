<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">list</a></li>
        </ul>
    </nav>
    <form action="Traitement_formulaire.php" method="post">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="number" name="age" placeholder="age">
        <input type="text" name="telephone" placeholder="telephone">
        <input type="text" name="adresse" placeholder="adresse">
        <input type="submit" value="inserer" name="save">
        <?php
        // Affichez les erreurs s'il y en a
        if (isset($_GET['errors']) && !empty($_GET['errors'])) {
            $errors = $_GET['errors'];
            echo "<div class='errors' style='color:red'> ";
            echo $errors;
            echo "</div>";
        }
        ?>
    </form>
</body>

</html>