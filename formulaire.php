<?php
if ($_POST) {
  //Affichage des saisies pour être sur de les obtenir avant des les exploiter.
  $recipient = "shystagaming@gmail.com";

  //$_POST['email'] = "from: $_POST [email]  \n";
  //$_POST['email'] = "MIME-Version: 1.0 \r \n";
  //$_POST['email'] = "Content-type: text/html; charset=iso-8859-1 \r\n";

// $_POST['expediteur'] = 'From: ' . $_POST['expediteur'];

 // $_POST['message'] = "Nom : " . $_POST['nom'] . "<br>Prénom : " . $_POST['prenom'] . "<br>Sujet : " . $_POST['sujet'] . " <br>Message: " . $_POST['message'];

//nous mettons toutes les informations dans le message sans oublier le message en question
$nom = "$_POST[nom]";
$mess = "$_POST[message]";
$email = "$_POST[email]";

  mail($recipient, $nom , $mess, $email);

//la fonction mail() reçoit toujours 4 ARGUMENTS et lordre à une importance cruciale. Comme dans la pluspart des fonctions, il faut respecter le NOMBRE et lORDRE des arguments que lon transmet.
}
echo "Merci pour votre message !";
?>

