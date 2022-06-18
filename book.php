<?php
$nom=$_POST['nom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$date=$_POST['date'];
$heure=$_POST['heure'];
$nombre=$_POST['nombre'];
$message=$_POST['message'];

try
{
$bdd = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO book(nom,email,telephone,date,heure,nombre,message) VALUES( :nom, :email, :telephone, :date, :heure, :nombre, :message)');
$req->execute(array(
    'nom' => $nom,
    'email' => $email,
    'telephone' => $telephone,
    'date' => $date,
    'heure' => $heure,
    'nombre' => $nombre,
    'message' => $message
));
header('Location: index.php');






?>