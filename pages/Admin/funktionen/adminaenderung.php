<?php
include('../../../php/database.php'); //datenbank verbindung

  echo "<h1>Artikel Ändern</h1>";
  echo "<form method=\"post\">
        <label for=\"altArtikelBezeichnung\">Alte Artikel Bezeichnung</label>
        <input id=\"altArtikelBezeichnung\" type=\"text\" name=\"altArtikelBezeichnung\">

        <br>
        <br>

        <label for=\"neuArtikelBezeichnung\">Neue Artikel Bezeichnung</label>
        <input id=\"neuArtikelBezeichnung\" type=\"text\" name=\"neuArtikelBezeichnung\">

        <label for=\"neuArtikelPreis\">Neuer Artikel Preis</label>
        <input id=\"neuArtikelPreis\" type=\"text\" name=\"neuArtikelPreis\">

        <br>
        <br>

        <button type=\"submit\" name=\"button\">Absenden</button>
        <a href=\"../admin.php\"><input type=\"button\" value=\"Zum Login\"></a>
      </form>";

      if (isset($_POST['button'])) { //Überprüfung, ob der Submit-Button gedrückt wurde

          $query = "SELECT * FROM Artikel;"; //query
          $result = $pdo->query($query); //query ausführung


          foreach ($result as $row) { //loop des query resultats
            $bezeichnung = $row['bezeichnung'];
            if ($bezeichnung == $_POST['altArtikelBezeichnung']) { //wenn die Bezeichnung auf einen Artikel in Datenbank zutrifft
              $values = 0;
              $aenderungsquery = null;

              if ($_POST['neuArtikelBezeichnung']) { //setzung der Value-Variable
                $values = 1;
              }
              if ($_POST['neuArtikelPreis']) { //setzung der Value-Variable
                $values = 2;
              }
              if ($_POST['neuArtikelBezeichnung'] && $_POST['neuArtikelPreis']) { //setzung der Value-Variable
                $values = 3;
              }

              switch ($values) { //auswertung, welcher Fall zutrifft
                case 0: //keine Werte eingetragen
                  echo "Bitte etwas eingeben";
                  break;
                case 1: //nur Bezeichnung geändert
                  $aenderungsquery = "UPDATE Artikel SET bezeichnung=?  WHERE bezeichnung=?;";
                  $statement= $pdo->prepare($aenderungsquery);
                  $statement->execute(array($_POST['neuArtikelBezeichnung'], $_POST['altArtikelBezeichnung']));
                  echo "Namen geändert";
                  break;
                case 2: //nur Preis geändert
                  $aenderungsquery = "UPDATE Artikel SET preis=?  WHERE bezeichnung=?;";
                  $statement= $pdo->prepare($aenderungsquery);
                  $statement->execute(array($_POST['neuArtikelPreis'], $_POST['altArtikelBezeichnung']));
                  echo "Preis geändert";
                  break;
                case 3: //Namen und Preis geändert
                  $aenderungsquery = "UPDATE Artikel SET bezeichnung=?, preis=?  WHERE bezeichnung=?;";
                  $statement= $pdo->prepare($aenderungsquery);
                  $statement->execute(array($_POST['neuArtikelBezeichnung'], $_POST['neuArtikelPreis'], $_POST['altArtikelBezeichnung']));
                  echo "Name und Preis geändert";
                  break;
              }
            }
          }
      }
 ?>
