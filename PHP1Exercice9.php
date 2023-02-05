<h1> Exercice 9</h1>

Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").

<br>Exemple<br>
afficherRadio($nomsRadio); <br>

<br>

<h2> Résultat </h2>
<?php

// VARIABLES 

$nomsRadio = array("Masculin", "Feminin", "Autre");


    function afficherRadio($nomsRadio) {
    echo "<form style='background-color:E8E3E2;width: 180px; padding:6px'>";
    foreach ($nomsRadio as $nom){
        echo '<input type="radio" name="choix" value="on">' . $nom . '<br>';
    }
    echo '<form';
    }
    afficherRadio($nomsRadio);