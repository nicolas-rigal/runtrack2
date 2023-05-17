<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$str = "certaines choses changent, et d'autres ne changeront jamais.";
$first_char = $str[0];
$i = 1;

while ($i < strlen($str)) {
  $str[$i-1] = $str[$i];
  $i++;
}

$str[strlen($str)-1] = $first_char;

$str = ucfirst($str); // Mise en majuscule de la première lettre

echo $str; // Affichage de la chaîne modifiée
?>
   
</body>
</html>