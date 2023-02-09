<h1> Exercice 2</h1>

Soit le tableau suivant:
$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
<br>
<br>

Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
<br>
<br>
Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);
<br>
<br>
<!-- Resume : 
Nom pays => MAJ -> voir FONCTION "strtoupper"
Tableau : ordre alphabétique algorithme.-> voir FONCTION "ksort" --> 

<h2> Résultat </h2>



<!-- VARIABLES-->

<?php

//VARIABLE
// Etape 1 : ouvrir fonction afficherTableHTML avec variable de ref $tableau
// Etape 2 : indiquer qu'on veut la liste par ordre alphab. -> "ksort"
// Etape 3 : créer tableau en HTML pour qu'il puisse apparaitre par après comme demandé (lignes, bordures, etc.)
$capitales = array("France" => "Paris", "Allemagne" => "Berlin", "Italie" => "Rome", "Espagne" => "Madrid");



function AfficherTableHTML($capitales) {
    ksort($capitales);
    echo "<table border='1'>",
    '<thead>',
    '<tr>',
      '<th>Pays</th>',
      '<th>Capital</th>',
    '</tr>',
'<tbody>';
    foreach ($capitales as $Pays => $Cap) {
        strtoupper($Pays);
        echo '<tr>',
            '<td>' . $Pays . '</td>',
            '<td>' . $Cap . '</td>',
            '</tr>';
    }
    echo '</tbody>',
    '</thead>',
        '</table>';
       
    }
    
AfficherTableHTML($capitales);