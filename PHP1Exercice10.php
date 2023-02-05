<h1>Exercice 10 </h1> 

En utilisant l’ensemble des fonctions personnalisées crées précédemment,  créer  un  formulaire complet  qui  contient  les  informations  suivantes: <br>

champs  de  texte avec : <br>  nom,  prénom,  adresse  e-mail, ville, sexe 

<br> <br> 

Et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
<br> <br>
  «Développeur Logiciel»,«Designer web», «Intégrateur» ou «Chef de projet».

<br> <br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).

<h2> Résultat </h2>



Informations personnelles : <br> <br>

<?php 

$nomsInput = array("Nom", "Prénom", "Adresse e-mail", "Ville", "Sexe");
function afficherInput($array){
    echo "<form style='background-color:E8E3E2;width: 180px; padding:6px'>"; // permet d'afficher la forme du tableau, couleur de fond, taille, padding.
        foreach ($array as $val){
            echo "<p>".$val."<br><input type='text'/></p>"; // input type : pour le formulaire en liste normal
        }
    echo "</form>";
}
afficherInput($nomsInput);
?> 

Quelle formation souhaitez vous choisir ? <br> <br>

<form style='background-color:E8E3E2;width: 180px; padding:6px' method="POST"> 
    <input type="checkbox" name="mon_champ[]" value="Choix
   1"/>Développeur Logiciel<br><br>
    <input type="checkbox" name="mon_champ[]" value="Choix
   2"/>Designer web<br><br>
    <input type="checkbox" name="mon_champ[]" value="Choix
   3"/>Intégrateur» ou «Chef de projet<br><br>
    <input type="submit" value="OK">
   </form>
   

<?php 
// method=POST (ligne 37) permet d'ajouter des cases à cocher 
// inpu type = submit + value = OK : permet d'ajouter un boutton OK de validation du formulaire. 

?> 

Option 2:  tableaux 3 : <br> <br> 

<?php // Tableau 3 comme autre option pour l'exercice 

$choixForma = array ("Développeur Logiciel","Designer web", "Intégrateur", "chef de projet");
function alimenterListeDeroulante($array){
    echo "<select name = 'civilité'> ";
    foreach($array as $choixforma){
       
        echo"<option value = '$choixforma'> $choixforma 
        </option>"; // OPTION VALUE permet de faire une liste déroulante. 
        
        "</select>";
        
    }
}
alimenterListeDeroulante($choixForma);
echo "<input type = 'submit' value = 'Ok'/>"; 