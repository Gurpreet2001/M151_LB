<?php

  $userName = $_GET['userName']; //Logininformation aus admin.php
  $userPw = $_GET['userPassword']; //Logininformation aus admin.php

  $adminName = "admin"; //Admin-Username
  $adminPw = "klapp42stuhl"; //Admin-Passwort

  if ($userName == $adminName && $userPw == $adminPw) { //Überprüfung, ob Adminlogin richtig war
    echo "<nav>
            <a href=\"funktionen/adminartikel.php\"><li>Artikel hinzufügen</li></a>
            <a href=\"funktionen/adminaenderung.php\"><li>Artikel Änderung</li></a>
            <a href=\"funktionen/adminloeschen.php\"><li>Artikel Löschen</li></a>
          </nav>"; //Login richtig
  }
  else {
    echo "<a href=\"admin.php\"> Erneut versuchen </a> "; //login falsch
  }

 ?>
