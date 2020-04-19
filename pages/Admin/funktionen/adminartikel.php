<?php
include('../../../php/database.php'); //datenbank verbindung

  echo "<h1>Artikel erfassen</h1>";
  echo "<form method=\"post\">
        <label for=\"artikelBezeichnung\">Artikel Bezeichnung</label>
        <input id=\"artikelBezeichnung\" type=\"text\" name=\"artikelBezeichnung\">

        <label for=\"artikelPreis\">Artikel Preis</label>
        <input id=\"artikelPreis\" type=\"text\" name=\"artikelPreis\">

        <br>
        <br>

        <button type=\"submit\" name=\"button\">Absenden</button>
        <a href=\"../admin.php\"><input type=\"button\" value=\"Zum Login\"></a>
      </form>";
  echo "";



    if (isset($_POST['button'])) { //Überprüfung ob der Submit-Button gedrückt wurde
      if (!empty($_POST['artikelBezeichnung']) && !empty($_POST['artikelPreis'])) { //Überprüfung, ob die Felder ausgefüllt sind
        $stmt = $pdo->prepare('INSERT INTO artikel(bezeichnung, preis)
        VALUES(?, ?)'); //query

        $stmt->execute(array($_POST['artikelBezeichnung'], $_POST['artikelPreis'])); //query ausgeführt
        echo "Artikel erfolgreich erfasst.";
      }
      else {//nicht beide ausgefüllt
        echo "Bitte Namen und Preis des neuen Artikels eingeben.";
      }

    }


 ?>
