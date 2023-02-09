<h1> Exercice 14</h1>

Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec qui hérite(extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
<br>

<br>Instancier une voiture «classique» et une voiture «électrique» ayant les caractéristiques suivantes: <br>

<br>Peugeot 408: $v1 = new Voiture("Peugeot","408");<br>
<br>BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);<br>

<h2> Résultat</h2>

<?php

class Voiture
{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_statut; 


}