<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>