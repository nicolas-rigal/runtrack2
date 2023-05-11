<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$n = 0;
while ($n < 1000) {
  if ($n > 1) {
    $i = 2;
    while ($i < $n) {
      if ($n % $i == 0) {
        break;
      }
      $i++;
    }
    if ($i == $n) {
      echo $n . "<br>";
    }
  }
  $n++;
}

?>

    
</body>
</html>