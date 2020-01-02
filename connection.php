<?php
function openConnection() {
 // Try to figure out what these should be for you
 $dbhost    = "localhost";
 $dbuser    = "test";
 $dbpass    = "test";
 $db        = "Becode";
 $charset = 'utf8mb4';
 
 // Try to understand what happens here 
$pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db.';charset='.$charset, $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 // Why we do this here
 return $pdo;
}


?>