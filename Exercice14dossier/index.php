<h1> Exercice 14 </h1>

//! pour charger les classes à utiliser (que nous avons préalablement créées) il faudra utiliser la fonction AUTOLOAD.

<?php


spl_autoload_register(function($class) 
{
  require_once $class.'.php';
  
});



$v1 = new Voiture("Peugeot", "408", 5);
$ve1 =new VoitureElec("BMW","i3", 300, 5);

echo "<form style='background-color:E8E3E2;width: 680px; padding: 10px'>";
echo "******* Infos véhicules exercice 14********<br> <br>";
$ve1->infovehicule();
$v1 ->infovehicule();
echo "</form>";