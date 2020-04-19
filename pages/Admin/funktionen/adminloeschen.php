<?php
include('../../../php/database.php'); //datenbank anbindung

  echo "<h1>Artikel Löschen</h1>";
  echo "<form method=\"post\">
        <label for=\"artikelBezeichnung\">Zu Löschender Artikel (Bezeichnung)</label>
        <input id=\"artikelBezeichnung\" type=\"text\" name=\"artikelBezeichnung\">

        <br>
        <br>

        <button type=\"submit\" name=\"button\">Absenden</button>
        <a href=\"../admin.php\"><input type=\"button\" value=\"Zum Login\"></a>
      </form>";

      if (isset($_POST['button'])) {////Überprüfung, ob der Senden-Button gedrückt wurde

          $query = "SELECT * FROM Artikel;"; //query
          $result = $pdo->query($query); //ausführung der query
          if (!empty($_POST['artikelBezeichnung'])) {
            foreach ($result as $row) {
              $bezeichnung = $row['bezeichnung'];
              if ($bezeichnung == $_POST['artikelBezeichnung']) { //Prüfung ob der Artikel überhaupt existiert
                $loeschungsquery = "DELETE FROM Artikel WHERE bezeichnung=?;";
                $statement= $pdo->prepare($loeschungsquery);
                $statement->execute(array($_POST['artikelBezeichnung']));
                echo "Artikel erfolgreich gelöscht."; //richtig geschrieben
              }
            }
          }
          else {
            echo "Artikelname falsch geschrieben"; //falsch geschrieben
          }



      }
 ?>
