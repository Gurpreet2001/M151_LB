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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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


/* Fürs testen gedacht, setzt alle Session-Variablen zurück
      echo "<form method=\"post\">";
      echo "<input type=\"submit\" name=\"cookieButton\" value=\"Session zurücksetzen\"> ";
      echo "</form>";

      if (isset($_POST['cookieButton'])) {
        session_unset();
      }
*/

    ?>
  </div>

  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
