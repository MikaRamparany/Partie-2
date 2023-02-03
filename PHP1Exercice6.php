<h1> Exercice 6</h1>

Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
Exemple:
<br>
$elements = array("Monsieur","Madame","Mademoiselle");
<br>

alimenterListeDeroulante($elements);
<br>


<h2> Résultat</h2>

<?php


//VARIABLES

$elements = array("Monsieur","Madame","Mademoiselle","Nom binaire 😏",);

// Code 

echo "Choisissez une civilité : <br>" ;


function alimenterListeDeroulante($array){
    echo "<select name = 'civilité'> ";
    foreach($array as $civilité){
       
        echo"<option value = '$civilité'> $civilité 
        </option>"; // OPTION VALUE permet de faire une liste déroulante. 
    }
}
alimenterListeDeroulante($elements);
