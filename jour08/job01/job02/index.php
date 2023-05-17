<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
<?php
$cookie_name = "nbvisites";

// Vérifie si le cookie existe déjà et récupère sa valeur
if(isset($_COOKIE[$cookie_name])){
    $cookie_value = $_COOKIE[$cookie_name];
} else {
    $cookie_value = 0;
}

// Vérifie si le bouton Reset a été cliqué
if(isset($_POST["reset"])){
    $cookie_value = 0;
} else {
    $cookie_value += 1;
}

// Met à jour la valeur du cookie
setcookie($cookie_name, $cookie_value, time()+20*24*60*60);

// Affiche le nombre de visites
echo "Nombre de visites: " . $cookie_value;
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>
