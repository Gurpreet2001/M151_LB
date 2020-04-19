<?php
session_start(); //session start
include('../php/database.php'); //datenbank verbindung
$_SESSION['eBrown'] = true; //Braunes-Etui wird gekauft
 ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Brown Etui</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <h1>Bestelung : Etui</h1>
  <img id="ePurple" src="../img/Holzschachtel.jpg" alt="etui">


    <h3>Gewünschte Inhalte</h3>

    <?php
      $inhalte = "SELECT bezeichnung FROM Artikel;";//select abfrage
      $result = $pdo->query($inhalte); //ausführung des selects

      echo "<table>";
      echo "<form method=\"post\"> ";
        foreach ($result as $row) { //hineinschreiben der Inhalte auf der Seite
          $bezeichnung = $row['bezeichnung'];
          echo "<tr>
                <td> <input id=\"$bezeichnung\" type=\"checkbox\" name=\"checkbox[]\" value=\"$bezeichnung\"> </td>
                <td> <label for=\"$bezeichnung\">$bezeichnung </label>  </td>
              </tr>";
        }
      echo  "<tr>
              <td> <button type=\"submit\" name=\"button\">Senden </button>
             </tr>";

      echo "</table>";
      echo "</form>";

      if (isset($_POST['button'])) { //Überprüfung, ob der Senden-Button gedrückt wurde
         if (isset($_POST['checkbox'])) { //Überprüfung, ob Checkboxen ausgewählt wurden
 //          $_SESSION['checkedBoxes'] = $_POST['checkbox'];
           $_SESSION['ePurpleCount'] = count($_POST['checkbox']);
           echo "There are ".$_SESSION['ePurpleCount']." checkboxe(s) are checked";

           // $_SESSION['selectedItems'] = null;
           // foreach ($_SESSION['checkedBoxes'] as $key) {
           //   $_SESSION['selectedItems'] = $key;
           // }
         }
      }


     ?>


  <hr>

  <a href="../index.php">Etui kaufen</a>

</body>

</html>
