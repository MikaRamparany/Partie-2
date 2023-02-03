<h1> Exercice 5</h1>

Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés. <br>
Exemple:$nomsInput = 

array("Nom","Prénom","Ville");
afficherInput($nomsInput);

<h2> Résultat</h2>

<?php

// VARIABLES 

$nomsInput = array("Nom", "Prénom", "Ville");
function afficherInput($array){
    echo "<form style='background-color:E8E3E2;width: 180px; padding:6px'>"; // permet d'afficher la forme du tableau, couleur de fond, taille, padding.
        foreach ($array as $val){
            echo "<p>".$val."<br><input type='text'/></p>";
        }
    echo "</form>";
}
afficherInput($nomsInput);
