<?php
//Nutzlose Seite, wurde davor benutzt um neue Artikel zu erfassen

include('../../php/database.php'); //datenbank verbindung

  $stmt = $pdo->prepare('INSERT INTO artikel(bezeichnung, preis)
  VALUES(?, ?)'); //query

  $stmt->execute(array($_GET['artikelBezeichnung'], $_GET['artikelPreis'])); //query ausführung

 ?>

 <!DOCTYPE html>
 <html lang="de" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Erfolg</title>
   </head>
   <body>
     <h1>Erfolgreich hinzugefügt!</h1>
     <a href="admin.php">Nochmehr hinzufügen</a>
   </body>
 </html>
