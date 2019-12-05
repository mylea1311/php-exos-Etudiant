<?php 
Class Etudiant {
Public $prenom;
public $nom;
public $etude;

public function set_prenom($noveau_prenom){
$this->prenom = $noveau_prenom;
}
public function set_nom($noveau_nom){
   $this->nom = $noveau_nom;
   }
   public function set_etude($noveau_etude){
      $this->etude = $noveau_etude;
      }

public function get_prenom(){
 return $this->prenom;
}
public function get_nom(){
   return $this->nom;
  }
  public function get_etude(){
   return $this->etude;
  }
}
?>
