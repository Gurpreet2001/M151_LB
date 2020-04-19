<!-- Login Seite für Admin -->
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
  </head>
  <body>
    <h1>Login erforderlich</h1>
       <form action="adminauswahl.php" method="get">
         <label for="userName">Username</label>
         <input id="userName" type="text" name="userName">
         <label for="userPassword">Password</label>
         <input id="userPassword" type="text" name="userPassword">
         <br>
         <button type="submit">Absenden</button>
         <button type="reset">Abbrechen</button>

       </form>

  </body>
</html>
