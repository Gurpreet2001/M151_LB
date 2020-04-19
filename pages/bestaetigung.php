<?php
session_start(); //session starten
include('../php/database.php'); //datenbank verbindung

//Kundeninformationen, abgefangen aus form.php
$_SESSION['userName'] = $_GET['userName'];
$_SESSION['userNachname'] = $_GET['userNachname'];
$_SESSION['userStrasse'] = $_GET['userStrasse'];
$_SESSION['userPLZ'] = $_GET['userPLZ'];
$_SESSION['userOrt'] = $_GET['userOrt'];
$_SESSION['userTelefon'] = $_GET['userTelefon'];
$_SESSION['userBemerkung'] = $_GET['userBemerkung'];

?>

<!DOCTYPE html>
<html lang="de" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Kundeninfo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <h1>Bitte füllen Sie Ihre Angaben ein</h1>


  <form id="form" action="dankeseite.php" method="get">

    <table>
      <tr>
        <td><label for="userName">Name</label></td>
        <td><?php echo $_SESSION['userName'] //ausgabe Kundeninformation ?></td>
      </tr>

      <tr>
        <td><label for="userNachname">Nachname</label></td>
        <td>  <?php echo $_SESSION['userNachname'] //ausgabe Kundeninformation ?></td>
      </tr>

      <tr>
        <td><label for="userStrasse">Strasse</label></td>
        <td><?php echo $_SESSION['userStrasse'] //ausgabe Kundeninformation ?></td>
      </tr>

      <tr>
        <td><label for="userPLZ">PLZ</label></td>
        <td><?php echo $_SESSION['userPLZ'] //ausgabe Kundeninformation ?></td>
      </tr>

      <tr>
        <td><label for="userOrt">Ort</label></td>
        <td><?php echo $_SESSION['userOrt'] //ausgabe Kundeninformation ?></td>
      </tr>

      <tr>
        <td><label for="userTelefon">Telefon</label></td>
        <td><?php echo $_SESSION['userTelefon'] //ausgabe Kundeninformation ?></td>
      </tr>

      <tr>
        <td><label for="userBemerkung">Bemerkung</label></td>
        <td><?php echo $_SESSION['userBemerkung'] //ausgabe Kundeninformation ?></textarea></td>
      </tr>

      <tr>
        <td><button type="submit" name="buttonSubmit">Senden</button></td>
        <a href="form.php">
          <td>
            <input type="button" value="Zurück">
          </td>
        </a>
      </tr>


    </table>
  </form>
</body>

</html>
