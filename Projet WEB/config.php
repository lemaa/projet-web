<?php
//On demarre les sessions
session_start();
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/

//On se connecte a la base de donnee
mysql_connect("localhost", "root", "");
mysql_select_db("projet_web");

//Email du webmaster
$mail_webmaster = 'administrateur@ishop.net';

//Adresse du dossier de la top site
$url_root = 'localhost/projet web';

/******************************************************
----------------Configuration Optionelle---------------
******************************************************/

//Nom du fichier de laccueil
$url_home = 'index.php';

?>