<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
    // Creo una variabile testo
    $testo = "Le stazioni si somigliano tutte; poco importa se le luci non riescono a rischiarare più in là del loro alone sbavato, tanto questo è un ambiente che tu conosci a memoria, con l'odore di treno che resta anche dopo che tutti i treni sono partiti, l'odore speciale delle stazioni dopo che è partito l'ultimo treno. Le luci della stazione e le frasi che stai leggendo sembra abbiano il compito di dissolvere più che di indicare le cose affioranti da un velo di buio e di nebbia. Io sono sbarcato in questa stazione stasera per la prima volta in vita mia e già mi sembra d'averci passato una vita, entrando e uscendo da questo bar, passando dall'odore della pensilina all'odore di segatura bagnata dei gabinetti, tutto mescolato in un unico odore che è quello dell'attesa, l'odore delle cabine telefoniche quando non resta che recuperare i gettoni perché il numero chiamato non dà segno di vita.";

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

    <?php
    // Controllo se nel testo c'è la parola inserita nel parametro GET
      if (strpos($testo, $parola_censurata) > 0) {
        echo "<p>". $testo_censurato . "</p>";
      } else {
        echo " <h3>La parola " . $parola_censurata . " non è presente nel testo</h3>";
      }
    ?>

</body>

</html>
