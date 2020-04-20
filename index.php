<?php
session_start(); //session start
include('php/database.php'); //datenbank verbindung

if (!isset($_SESSION['ePurpleCount']) || !isset($_SESSION['eBrownCount'])) { // Fehlermeldung verhindern
  $_SESSION['ePurpleCount'] = 0;
  $_SESSION['eBrownCount'] = 0;
}

if (!isset($_SESSION['ePurple']) || !isset($_SESSION['eBrown'])) { // Fehlermeldung verhindern
  $_SESSION['ePurple'] = false;
  $_SESSION['eBrown'] = false;
}

/* Gescheiterter Versuch, die Preis-Berechnung dynamisch zu machen
 $selectQuery ='SELECT * FROM Artikel';
 $artikelListe = $pdo->query($selectQuery);
$summe = 10;

 foreach ($artikelListe as $artikel) {
   $alleArtikel = $artikel['bezeichnung'];
   echo $alleArtikel . "<br>";
   //echo $artikel['bezeichnung'] . $artikel['preis'];
 }
$priceSumQuery ='SELECT * FROM Artikel WHERE bezeichnung=?';
$artikelPreise = $pdo->prepare($priceSumQuery);
$artikelPreise->execute(array($_SESSION['selectedItems']));

foreach ($artikelPreise as $preis) {
  echo $preis['bezeichnung'] . $preis['preis'];
}
echo $summe;
 */
// print_r($artikelListe);

// print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="de" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Einstiegsseite</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>HappyWriter</h1>

  <div>
    <a href="pages/ePurple.php"><img id="ePurple" src="img/Etui.jpg" alt="etui"></a>
    <a href="pages/eBrown.php"><img id="eBrown" src="img/Holzschachtel.jpg" alt="holzschachtel"></a>
  </div>
  <hr>

  <a href="pages/form.php">Check out</a>

  <div>
    <?php
      echo "<table>
              <tr>
                <th> Etui </th>
                <th> Preis </th>
              </tr>";

      if ($_SESSION['ePurple']) { //Wenn das Lila Etui gekauft wird
        if (isset($_SESSION['ePurpleCount'])) {
          $sumPurple = 15+($_SESSION['ePurpleCount']*5); //Preis berechnung
        }

        echo  "<tr>
                <td> Etui - Lila </td>
                <td> $sumPurple </td>
              </tr>";
      }
      if ($_SESSION['eBrown']) { //Wenn das Lila Etui gekauft wird
        if (isset($_SESSION['ePurpleCount'])) {
          $sumBrown = 20+($_SESSION['eBrownCount']*5); //Preis berechnung
        }

        echo  "<tr>
                <td> Etui - Braun </td>
                <td> $sumBrown </td>
              </tr>";
      }

      echo "</table>";


// Fürs testen gedacht, setzt alle Session-Variablen zurück
      echo "<form method=\"post\">";
      echo "<input type=\"submit\" name=\"cookieButton\" value=\"Bestellung abbrechen\"> ";
      echo "</form>";

      if (isset($_POST['cookieButton'])) {
        session_unset();
      }


    ?>
  </div>
</body>

</html>
