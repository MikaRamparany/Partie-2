<h1> Exercice4 </h1>

A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme:
    https://fr.wikipedia.org/wiki/    
    
Le tableau passé en argument sera le suivant:

$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

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
      '<th>Lien</th>',
    '</tr>',
'<tbody>';
    foreach ($capitales as $Pays => $Cap ) {
        strtoupper($Pays);
        echo '<tr>',
            '<td>' . $Pays . '</td>',
            '<td>' . $Cap . '</td>',
            '<td><a href=https://fr.wikipedia.org/wiki/'.$Cap.' target=_blank>Lien</a></td>';
            '</tr>';
    }
    echo '</tbody>',
    '</thead>',
        '</table>';
       
    }
    
    
AfficherTableHTML($capitales);