<h1> Exercice 7</h1>

Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.
<br>
Exemple:
<br>

genererCheckbox($elements);//où $elements est un tableau associatif clé => valeur avec 3 entrées.
<br>


<h2> Résultat</h2>

<?php
// Déclaration d'un tableau

$choix = array("choix 1", "choix 2", "choix 3");

// Déclaration 


// OPTION 1 : Trouvé sur un cours Internet: 


if (isset($_POST['mon_champ'])) {
    echo "Vous avez choisi :";
    for ($i = 0, $c = count($_POST['mon_champ']); $i < $c; $i++) {
    echo "<br/><b>" . $_POST['mon_champ'][$i] . "</b>";
    }
   }
   ?>
   <form method="POST">
    <input type="checkbox" name="mon_champ[]" value="Choix
   1"/>Choix 1<br>
    <input type="checkbox" name="mon_champ[]" value="Choix
   2"/>Choix 2<br>
    <input type="checkbox" name="mon_champ[]" value="Choix
   3"/>Choix 3<br>
    <input type="submit" value="OK">
   </form>


Option 2 : 

