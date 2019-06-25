<?php
$user ="root";
$password = "";
$connect = new PDO('mysql:host=localhost;port=3308;dbname=site_cv', $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
mb_internal_encoding('UTF-8');
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
date_default_timezone_get();
session_start();
?>