<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
<?php
function calcule($num1, $operateur, $num2) {
  switch($operateur) {
      case '+':
          return $num1 + $num2;
          break;
      case '-':
          return $num1 - $num2;
          break;
      case '*':
          return $num1 * $num2;
          break;
      case '/':
          return $num1 / $num2;
          break;
      case '%':
          return $num1 % $num2;
          break;
      default:
          return "Opérateur invalide";
  }
}

echo calcule(5, '+', 5) . "<br>";
echo calcule(5, '-', 5) . "<br>";
echo calcule(5, '*', 5) . "<br>";
echo calcule(5, '/', 5) . "<br>";
echo calcule(5, '%', 5);


?>

</body>
</html>
