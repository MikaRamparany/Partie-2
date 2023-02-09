<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POO Héritage Voiture Voiture Electrique</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  



<h1> Exercice 14 </h1>

//! pour charger les classes à utiliser (que nous avons préalablement créées) il faudra utiliser la fonction AUTOLOAD.
<div class="container">

<?php

spl_autoload_register(function($class) 
{
  require_once $class.'.php';
  
});



// $v1 = new Voiture("Peugeot", "408", 5);
// $ve1 =new VoitureElec("BMW","i3", 300, 5);

// echo "******* Infos véhicules exercice 14********<br> <br>";
// $ve1->infovehicule();
// $v1 ->infovehicule();



$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);


// $v1->demarrer();
// $v1->accelerer(50);
// $v1->accelerer(50);
// $v2->demarrer();
// // $v2 -> stopper();
// $v2->accelerer(20);
// $v2->accelerer(70);


// echo "La vitesse actuelle du véhicule Peugeot 408 est de " . $v1->get_vitesseActuelle() . " km / h <br>";
// echo "La vitesse actuelle du véhicule Citroen C4 est de " . $v2->get_vitesseActuelle() . " km / h <br>";

// echo "</form>";

// Tableau avec toutes les infos Véhicule 1 et Véhicule 2 :
?>

<div class="infos">

<?php

echo "Infos véhicule 1 <br> <br> ********** <br> <br>";

echo "<div class='trucmuch'>". $v1-> infovehicule() . "</div> <br>";
?>

<?php



echo "Infos véhicule 1 <br> <br> ********** <br> <br>";

$v2-> infovehicule();

$v1-> demarrer();


$v1->accelerer(999999);
$v1->ralentir(12);


echo $v1->infosVitesse();

?>

</body>
</html>