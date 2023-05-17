<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function mon_count($acompter)
{
    $count = 0;
    foreach ($acompter as $element) {
        $count++;
    }
    return $count;
}

function occurrences($str, $char){
    $count = 0; // Initialize the count variable
    for ($i = 0; isset($str[$i]); $i++){
        if ($str[$i] == $char){
            $count++;
        }
    }
    return $count;
}

echo occurrences("Bonjour", "o") . "<br>";
echo occurrences("Bonjour", "a")



?>
   
</body>
</html>