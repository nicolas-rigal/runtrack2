/*ajout du nom et si le nom est déja dans mona array je dit bojour */

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
<?php
$prenoms = []; // Dictionnaire pour stocker les prénoms

// Vérifier si le cookie existe déjà
if (isset($_COOKIE['prenom'])) {
  $prenom = $_COOKIE['prenom'];
  echo "Bonjour $prenom !";
  echo '<form method="post"><input type="submit" name="deco" value="Déconnexion"></form>';

  // Vérifier si l'utilisateur clique sur le bouton "Déconnexion"
  if (isset($_POST['deco'])) {
    // Supprimer le cookie en le mettant à une date passée
    setcookie('prenom', '', time()-3600);
    // Recharger la page pour afficher le formulaire de connexion
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
  }
} else {
  // Vérifier si l'utilisateur a soumis le formulaire
  if (isset($_POST['connexion'])) {
    // Récupérer le prénom entré par l'utilisateur
    $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');

    // Vérifier si le prénom existe déjà dans le dictionnaire
    if (array_key_exists($prenom, $prenoms)) {
      echo "Le prénom '$prenom' existe déjà !";
    } else {
      // Ajouter le prénom dans le dictionnaire
      $prenoms[$prenom] = true;

      // Créer le cookie avec une durée de vie d'un jour
      setcookie('prenom', $prenom, time()+86400);
      // Recharger la page pour afficher le message de bienvenue
      header('Location: ' . $_SERVER['PHP_SELF']);
      exit;
    }
  } else {
    // Afficher le formulaire de connexion
    echo '<form method="post"><label>Prénom : <input type="text" name="prenom"></label><input type="submit" name="connexion" value="Connexion"></form>';
  }
}

// Afficher les prénoms dans le dictionnaire
echo '<h2>Prénoms enregistrés :</h2>';
echo '<ul>';
foreach ($prenoms as $prenom => $value) {
  echo "<li>$prenom</li>";
}
echo '</ul>';
?>


</body>
</html>
