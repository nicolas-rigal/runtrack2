<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
<?php
session_start();

// Vérifie si la variable de session "prenoms" existe déjà
if(isset($_SESSION["prenoms"])){
    $prenoms = $_SESSION["prenoms"];
} else {
    $prenoms = array(); // Initialise un tableau vide pour les prénoms
}

// Vérifie si le formulaire a été soumis
if(isset($_POST["prenom"])){
    $nouveauPrenom = $_POST["prenom"];
    array_push($prenoms, $nouveauPrenom); // Ajoute le nouveau prénom au tableau des prénoms
    $_SESSION["prenoms"] = $prenoms; // Met à jour la variable de session
}

// Affiche la liste des prénoms
echo "Liste des prénoms :<br>";
foreach($prenoms as $prenom){
    echo $prenom . "<br>";
}

// Bouton reset pour réinitialiser la liste des prénoms
if(isset($_POST["reset"])){
    unset($_SESSION["prenoms"]); // Supprime la variable de session "prenoms"
}
?>
<form method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom">
    <button type="submit">Ajouter</button>
</form>
<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>


</body>
</html>
