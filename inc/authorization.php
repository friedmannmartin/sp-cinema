<?php

//spustíme session
session_start();

if(!isset($_SESSION["user_id"])){
  //uživatel není přihlášen => přesměrujeme ho na přihlašovací stránku
  header('Location: signin.php');
  die();
}

//načteme připojení k databázi
require_once 'db.php';

//v session je user id uživatele, tak ho zkusíme načíst z DB
$stmt = $db->prepare("SELECT * FROM users WHERE id = ? LIMIT 1"); //limit 1 jen výkonnostní optimalizací :)
$stmt->execute(array($_SESSION["user_id"]));

//načteme záznam z DB do proměnné $currentUser, která následně bude dostupná v celé aplikaci
$currentUser = $stmt->fetch(PDO::FETCH_ASSOC);

//pokud by v DB z nějakého důvodu uživatel nebyl (třeba byl mezitím smazán), tak smažeme session a přesměrujeme uživatele na homepage
if (!$currentUser){
  session_destroy();
  header('Location: index.php');
  die();
}
