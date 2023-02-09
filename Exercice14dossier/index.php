//! pour charger les classes à utiliser (que nous avons préalablement créées) il faudra utiliser la fonction AUTOLOAD.

<?php


spl_autoload_register(function($class) 
{
  require_once $class.'.php';
  
});



$v1 = new Voiture("Peugeot", "408", 5);
$ve1 =new VoitureElec("BMW","i3", 300, 5);

$ve1->infovehicule();