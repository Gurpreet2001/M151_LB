<?php
session_start(); //session start
include('../php/database.php'); //datenbank verbindung

$stmt = $pdo->prepare('INSERT INTO kunde(name, nachname, strasse, plz, ort, telefon, bemerkung)
VALUES(?, ?, ?, ?, ?, ?, ?)'); //query

$stmt->execute(array($_SESSION['userName'], $_SESSION['userNachname'], $_SESSION['userStrasse'], $_SESSION['userPLZ'], $_SESSION['userOrt'], $_SESSION['userTelefon'], $_SESSION['userBemerkung'])); //query ausführung

session_unset(); //sessionvariablen zurücksetzen
session_destroy(); //session zerstören
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DankeSeite</title>
  </head>
  <body>
    <h1>Besten Dank für Ihre Bestellung</h1>

    <img src="../img/logo.jpg" alt="">

    <a href="../index.php">Hauptseite</a>

  </body>
</html>
