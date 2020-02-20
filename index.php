<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
    // Creo una variabile testo
    $testo = " Cavallino arri, arrò, prendi la biada che ti do, prendi i ferri che ti metto per andare a San Francesco. A San Francesco c’è una via che ti porta a casa mia. A casa mia c’è un altare con tre monache a lavorare, una cuce, una taglia, una fa cappelli di paglia; la più piccola e vecchietta Santa Barbara benedetta.";

    // parola che viene inserita tramite parametro GET per esempio index.php?parola=ferri
    $parola_censurata = $_GET["parola"];

    // variabile da sostituire con la parola da censurare
    $parola_nascosta = "***";
    // sostituisco la parola censurata con gli asterischi
    $testo_censurato = str_replace($parola_censurata, $parola_nascosta, $testo);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <h2>Testo originale:</h2>
  <h3>Lunghezza testo: <?php echo strlen($testo); ?></h3>
  <p> <?php echo $testo; ?></p>
  <h2>Testo censurato:</h2>
  <h3>Lunghezza testo: <?php echo strlen($testo_censurato); ?></h3>
  <p>
    <?php
    // Controllo se nel testo c'è la parola inserita nel parametro GET
      if (strpos($testo, $parola_censurata) > 0) {
        echo "<p><strong>Testo censurato: </strong>". $testo_censurato . "</p>";
      } else {
        echo " <h3>La parola " . $parola_censurata . " non è presente nel testo</h3>";
      }
    ?>
  </p>
</body>

</html>
