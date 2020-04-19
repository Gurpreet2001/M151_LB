<?php
session_start(); //session start
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


  <form id="form" action="bestaetigung.php" method="get">
    <table>
      <tr>
        <td><label for="userName">Name</label></td>
        <td><input id="userName" type="text" name="userName" value=""></td>
      </tr>

      <tr>
        <td><label for="userNachname">Nachname</label></td>
        <td>  <input id="userNachname" type="text" name="userNachname" value=""></td>
      </tr>

      <tr>
        <td><label for="userStrasse">Strasse</label></td>
        <td><input id="userStrasse" type="text" name="userStrasse" value=""></td>
      </tr>

      <tr>
        <td><label for="userPLZ">PLZ</label></td>
        <td><input id="userPLZ" type="text" name="userPLZ" value=""></td>
      </tr>

      <tr>
        <td><label for="userOrt">Ort</label></td>
        <td><input id="userOrt" type="text" name="userOrt" value=""></td>
      </tr>

      <tr>
        <td><label for="userTelefon">Telefon</label></td>
        <td><input id="userTelefon" type="text" name="userTelefon" value=""></td>
      </tr>

      <tr>
        <td><label for="userBemerkung">Bemerkung</label></td>
        <td><textarea id="userBemerkung" name="userBemerkung" rows="1" cols="10"></textarea></td>
      </tr>

      <tr>
        <td><button type="submit" name="buttonSubmit">Senden</button></td>
        <td><button type="reset" name="buttonReset">Abbrechen</button></td>
        <td>
          <a href="../index.php">
            <input type="button" value="Zurück">
          </a>
        </td>
      </tr>


    </table>
  </form>



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
