<?php
$nom=$_POST['nom'];
$email=$_POST['email'];
$objet=$_POST['objet'];
$message=$_POST['message'];

require_once("connexion.php");
$req = $bdd->prepare('INSERT INTO contacter(nom,email,objet,message) VALUES( :nom, :email, :objet ,:message)');
$req->execute(array(
    'nom' => $nom,
    'email' => $email,
    'objet' => $objet,
    'message' => $message
));
echo 'Votre message a été envoyé avec succes. Merci pour votre fidélité!';

?>