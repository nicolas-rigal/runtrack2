<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

$str = "Dans l'espace, personne ne vous entend crier";
$i = 0;

while(isset($str[$i])){
  $i++;
}

echo "La chaîne contient " . $i . " caractères.";

?>

</body>

</html>