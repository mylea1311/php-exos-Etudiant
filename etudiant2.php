<?php
session_start();
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
echo '<strong>'.$compte.'</strong> visites.';
?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <h1> PHP </h1>
<?php
class Etudiant2{
   private $prenom;
   private $nom;
   public function __construct($prenom,$nom,$etude)
   {
      $this->prenom=$prenom;
      $this->nom=$nom;
      $this->etude=$etude;
   }
   public function getinfo()
   {
      $texte="l'etudiant est : $this->prenom $this->nom son departement d'etude est : $this->etude";
      return $texte;
   }
}
$etudiant = new Etudiant2("melanie","gimmelli","gard");
$etudiant1 = new Etudiant2("mike","ruff","rhone alpes");

echo $etudiant->getinfo().'<br/>';
echo $etudiant1->getinfo();
?>

</body>
</html>