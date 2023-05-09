<html lang=fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Déclaration des variables
    $boolean = false; // Déclaration d'une variable booléenne avec une valeur initiale de false
    $integer = 10; // Déclaration d'une variable entière avec une valeur initiale de 10
    $string = "je suis une string"; // Déclaration d'une variable chaîne de caractères
    $float = 3.14; // Déclaration d'une variable nombre à virgule flottante avec une valeur initiale de 3.14

    // Génération du tableau HTML
    echo "<table>"; // Ouverture de la balise HTML pour un tableau
    echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>"; // Création de l'entête du tableau
    echo "<tbody>"; // Ouverture du corps du tableau
    echo "<tr><td>" . gettype($boolean) . "</td><td>boolean</td><td>" . ($boolean ? "true" : "false") . "</td></tr>"; // Ajout d'une ligne pour la variable booléenne avec son type, son nom et sa valeur
    echo "<tr><td>" . gettype($integer) . "</td><td>integer</td><td>$integer</td></tr>"; // Ajout d'une ligne pour la variable entière avec son type, son nom et sa valeur
    echo "<tr><td>" . gettype($string) . "</td><td>string</td><td>$string</td></tr>"; // Ajout d'une ligne pour la variable chaîne de caractères avec son type, son nom et sa valeur
    echo "<tr><td>" . gettype($float) . "</td><td>float</td><td>$float</td></tr>"; // Ajout d'une ligne pour la variable nombre à virgule flottante avec son type, son nom et sa valeur
    echo "</tbody>"; // Fermeture du corps du tableau
    echo "</table>"; // Fermeture de la balise HTML pour le tableau
    ?>
</body>

</html>