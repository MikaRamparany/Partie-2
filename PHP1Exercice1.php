<h1> Exercice 1 </h1>

Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.

<h2> Resultat </h2>
<?php

// VARIABLE 

///solution 1 mais non conforme à la demande de l'exo : 
$string1 = "Mon texte en parametre";
$string = strtoupper($string1);

echo "<p style='color:red'>".$string;
 
/// solution 2 : créer la fonction selon la demande de l'exo 

// pour créer une fonction --> "function"+"nom donnée à la fonction"+($variable de référence pour la fonction), puis { } et y mettre les conditions variables. Enfin, après les {} utiliser la FONCTION sur notre phrase.


function convertirMajRouge($str_to_convert) {
    $str = strtoupper($str_to_convert);
    echo "<p style='color:red'>" . $str."</p><br>";
}
convertirMajRouge("Mon texte en parametre");
