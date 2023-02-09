<?php

//! Création class Voiture Electrique 
class VoitureElec
{
    private string $_marque;
    private string $_modele;
    private int $_autonomie;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_statut; 

    public function __construct($_marque,  $_modele, $_autonomie, $_nbPortes)
    {
        $this->_marque = $_marque;
        $this->_modele = $_modele;
        $this->_autonomie = $_autonomie;
        $this->_nbPortes = $_nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_statut = false; // arrêt
        
    }
      //! Début accesseurs (getter) : param pour lire les valeurs.
      public function get_marque()
      {
          return $this->_marque;
      }
      public function get_modele()
      {
          return $this->_modele;
      }
      public function get_autonomie()
      {
          return $this->_autonomie;
      }
      public function get_nbPortes()
      {
          return $this->_nbPortes;
      }
      public function get_vitesseActuelle()
      {
          return $this->_vitesseActuelle;
      }
      //! Fin accesseurs (getter).
  
      //! Début mutateurs (setter) : param qui permettent de modifier les valeurs. 
  
      public function set_marque($marque)
      {
          $this->_marque = $marque;
      }
      public function set_modele($modele)
      {
          $this->_modele = $modele;
      }
      public function set_autonomie($_autonomie)
      {
          $this->_autonomie = $_autonomie;
      }
      public function set_nbPortes($nbPortes)
      {
          $this->_nbPortes = $nbPortes;
      }
      public function set_vitesseActuelle($vitesseActuelle)
      {
          $this->_vitesseActuelle = $vitesseActuelle;
      }
  
      //! Fin mutateurs (setter).
  
      //! ------------------------------------
      public function demarrer()
      {
          // ($this->_statut) = $this-> _statut = true
          if ($this->_statut) {
              echo "Le véhicule est déjà démarré !";
          } else {
              echo "Le véhicule " . $this->_marque . " "  . $this->_modele .  "  démarre <br> ";
              $this->_statut = true;
          }
      }
  
      public function stopper()
      {
          if (!$this->_statut) {
              echo "Le véhicule est déjà à l'arrêt !";
          } else {
              echo "Le véhicule " . $this->_marque . " "  . $this->_modele .  "  est stoppé <br> ";
              $this->_statut = false;
              $this->_vitesseActuelle = 0;
          }
      }
  
  
      public function accelerer($vitesse)
      {
          // (!$this->_statut) = $this->_statut = false
          if (!$this->_statut) {
              echo "Le véhicule " . $this->_marque . " " . $this->_modele . " veut accélérer de " . $vitesse . " km / h ." . "<br> Pour accélérer, il faut démarrer le véhicule " . $this->_marque . " "  . $this->_modele . " !";
          } else {
              echo "Le véhicule " . $this->_marque . " " . $this->_modele . " accélère de " . $vitesse . " km / h <br>";
  
              $this->_vitesseActuelle += $vitesse;
          }
      }
  
      public function ralentir($vitesse)
      {
          if (!$this->_statut) {
              echo "Pour ralentir, il faut que le véhicule" . $this->_marque . " "  . $this->_modele . "soit déjà démarré !";
          } else {
              echo "Le véhicule" . $this->_marque . " " . $this->_modele . "ralentit de " . $vitesse . " km / h <br>";
              $this->_vitesseActuelle -= $vitesse;
          }
      }
      public function infovehicule()
      {
          echo "Nom et modèle du véhicule : ".$this->_marque. " " .$this->_modele;
          echo "<br> Nombre de portes : ".$this->_nbPortes;
          echo "<br> Autonomie : " .$this->_autonomie;
          if (!$this->_statut) {
              echo "<br>La voiture est démarrée. ";
          } else {
              echo "<br>La voiture est stoppée . ";
          }
          echo "<br>Sa vitesse actuelle est de : ".$this->get_vitesseActuelle(). " km / h <br>";
      }
  }

