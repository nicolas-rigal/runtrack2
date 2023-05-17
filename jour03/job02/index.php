<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$i = 0;
// Parcourt la chaîne en affichant un caractère sur deux
while ($i < strlen($str)) {
    echo $str[$i];
    $i += 2;
}
?>
</body>
</html>