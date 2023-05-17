<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = array("consonnes" => 0, "voyelles" => 0);

$i = 0;
while ($i < strlen($str)) {
    $c = strtolower($str[$i]);
    if ($c >= 'a' && $c <= 'z') {
        if ($c == 'a' || $c == 'e' || $c == 'i' || $c == 'o' || $c == 'u' || $c == 'y') {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
    $i++;
}
echo $str;
echo "<table>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody>";
echo "</table>";
?>
   
</body>
</html>