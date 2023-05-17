<!DOCTYPE html>
<html>

<head>
  <title>Transformation de texte</title>
</head>

<body>

  <?php
  // Vérifier si le formulaire a été soumis
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];

    // Appeler la fonction correspondante
    if ($fonction == "gras") {
      $result = mettreEnGrasMotsMajuscules($str);
    } elseif ($fonction == "cesar") {
      $result = decalerCaracteres($str);
    } elseif ($fonction == "plateforme") {
      $result = ajouterUnderscoreMotsFinissantParMe($str);
    }

    // Afficher le résultat
    echo "<p>Résultat : $result</p>";
  }

  // Fonction pour mettre en gras les mots commençant par une lettre majuscule
  function mettreEnGrasMotsMajuscules($str)
  {
    return preg_replace_callback('/\b[A-Z][a-z]*\b/', function ($matches) {
      return "<strong>" . $matches[0] . "</strong>";
    }, $str);
  }

  // Fonction pour décaler les caractères selon le décalage spécifié (2 par défaut)
  function decalerCaracteres($str, $decalage = 2)
  {
    $result = "";
    $length = strlen($str);

    for ($i = 0; $i < $length; $i++) {
      $char = $str[$i];

      if (ctype_alpha($char)) {
        $ascii = ord($char);
        $shiftedAscii = ($ascii - 65 + $decalage) % 26 + 65;
        $result .= chr($shiftedAscii);
      } else {
        $result .= $char;
      }
    }

    return $result;
  }

  // Fonction pour ajouter un "_" aux mots finissant par "me"
  function ajouterUnderscoreMotsFinissantParMe($str)
  {
    return preg_replace('/\b(\w+me)\b/', '$1_', $str);
  }
  ?>
  <form method="post" action="">
    <label for="str">Texte:</label>
    <input type="text" name="str" id="str" required>

    <label for="fonction">Fonction:</label>
    <select name="fonction" id="fonction">
      <option value="gras">Gras</option>
      <option value="cesar">César</option>
      <option value="plateforme">Plateforme</option>
    </select>

    <button type="submit">Valider</button>
  </form>

</body>

</html>