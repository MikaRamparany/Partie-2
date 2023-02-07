<h1> Exercice 12</h1>

La fonction var_dump($variable)permet d’afficher les informations d’une variable.<br>

<br>
Soit le tableausuivant : <br> <br>

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2")); <br> <br>

A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.

<h2> Résultat <h2> 
<?php 

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

var_dump($tableauValeurs);
