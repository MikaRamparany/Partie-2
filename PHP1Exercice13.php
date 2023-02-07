<h1> Exercice 13</h1> 

Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: <br> <br>

marque,  modèle,  nbPortes et vitesseActuelleainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.  <br><br>

La  vitesse  initiale  de  chaque  véhicule instancié est de 0. <br>
Une méthode personnalisée pourra afficher toutes les informations d’un véhicule. 

<h2> Résultat </h2>

<?php

class Voiture1{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
  
        public function __construct(string $_marque, string $_modele, int $_nbPortes,int $_vitesseActuelle){
            $this->_marque = $_marque;
            $this->_modele= $_modele;
        $this->_nbPortes = $_nbPortes;
        $this->_vitesseActuelle = $_vitesseActuelle;
        }

        //! Début accesseurs (getter) : param pour lire les valeurs.
        public function get_marque() {
            return $this-> _marque;
        }
        public function get_modele(){
            return $this-> _modele;
        }
        public function get_nbPortes(){
            return $this-> _nbPortes;
        }
        public function get_vitesseActuelle(){
            return $this-> _vitesseActuelle;
        }
        //! Fin accesseurs (getter).

        //* Début mutateurs (setter) : param qui permettent de modifier les valeurs. 

        public function set_marque() {
            return $this-> _marque;
        }
        public function set_modele(){
            return $this-> _modele;
        }
        public function set_nbPortes(){
            return $this-> _nbPortes;
        }
        public function set_vitesseActuelle(){
            return $this-> _vitesseActuelle;
        }

       //* Fin mutateurs (setter).

       //* ------------------------------------

       public function Demarrer (){
            if ($this-> _vitesseActuelle==0){
                echo "Le véhicule" .$this->_marque. " ".$this->_modele." démarre <br>";
                $this->_vitesseActuelle = 1

            }

       }
  }


