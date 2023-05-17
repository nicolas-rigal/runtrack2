<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$reverse_str = "";
$i = mb_strlen($str, "UTF-8") - 1;//prend en compte les caractères multibyte car ��.
mb_internal_encoding("UTF-8");//définit l'encodage interne de PHP pour les fonctions de chaîne multibyte.

while ($i >= 0) {
  $reverse_str .= mb_substr($str, $i, 1);
  $i--;
}

echo $reverse_str;
?>
  
</body>
</html>