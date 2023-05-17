<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>    

    <form method="get" action="traitement.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom">
    
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom">
    
        <label for="age">Âge :</label>
        <input type="text" name="age" id="age">
    
        <input type="submit" value="Envoyer">
</form> 
      <?php
    if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $age = $_GET['age'];
    echo "Bonjour $prenom $nom, vous avez $age ans.";
    }
        ?>
</body>


</html>