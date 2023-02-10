<h1> Exercice 15 </h1>

En  utilisant  les  ressources  de  la  page http://php.net/manual/fr/book.filter.php,  vérifier  si  une adresse e-mail a le bon format.

<h2> Résultat </h2>

<?php 

$email = "elan@elan-formation.fr";
// Valider l'email
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
  echo "L'adresse  <b>$email</b> est une adresse e-mail valide";
}else{
  echo "L'adresse e-mail n'est pas valide";
}
?> 