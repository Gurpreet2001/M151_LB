<?php
$dsn  = 'mysql:dbname=LB_m151;host=localhost;';
$user = 'DB151_admin';
$pass = 'root';

try {
     $pdo = new PDO($dsn, $user, $pass); //PDO object
} catch (\PDOException $e) {
     echo "Fehlerhafte Instanziierung";
}
 ?>
