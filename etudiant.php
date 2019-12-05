<?php
include_once('etudiant.class.php');

$etudiant = new Etudiant;
$etudiant1 = new Etudiant;
 
 
$etudiant->set_prenom('mylea ');
$etudiant->set_nom('gim');
$etudiant->set_etude('Gard');
echo "l'etudiant  ".$etudiant->get_prenom();
echo ''.$etudiant->get_nom();
echo ' est dans le departement   '.$etudiant->get_etude().'<br/>';

$etudiant1->set_prenom('jean ');
$etudiant1->set_nom('file');
$etudiant1->set_etude('Ardeche');
echo "l'etudiant  ".$etudiant1->get_prenom();
echo ''.$etudiant1->get_nom();
echo ' est dans le departement   '.$etudiant1->get_etude().'<br/>';
?>
