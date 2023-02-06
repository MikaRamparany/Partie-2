<h1> Exercice 13</h1> 

Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: <br> <br>

marque,  modèle,  nbPortes et vitesseActuelleainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.  <br><br>

La  vitesse  initiale  de  chaque  véhicule instancié est de 0. <br>
Une méthode personnalisée pourra afficher toutes les informations d’un véhicule. 

<h2> Résultat </h2>

<?php

class Voiture{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
  
        public function __construct(string $marque, string $_modele, string $_nbPortes){
        $this->_nbPortes = $_nbPortes;
        }
}