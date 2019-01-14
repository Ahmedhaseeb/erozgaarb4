<?php session_start();
require_once("functions.php");
$db = new PDO('mysql:host=localhost;dbname=erozgaarb4;charset=utf8mb4', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

 ?>