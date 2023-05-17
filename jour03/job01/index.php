<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Créer un num contenant une liste de num
    $num = array(200, 204, 173, 98, 171, 404, 459); {
        // Afficher le premier nom dans le num

        // Parcours du num et affichage de chaque élément
        foreach ($num as $nombre) {
            if ($nombre % 2 == 0) {
                echo $nombre . " est pair<br />";
            } else {
                echo $nombre . " est impair<br />";
            }
        }
    }
    ?>


</body>

</html>