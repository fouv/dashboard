<?php
session_start();
$fichierJour = date('Y-m-d');
if(file_exists($fichierJour)){
$compteur = (int)file_get_contents($fichierJour);
$compteur ++;
file_put_contents($fichierJour, $compteur);
} else {
      file_put_contents($fichierJour,1)  ;
}

function nbre_vues_mois(int $annee, string $mois) {
      $mois = str_pad($mois, 2, 'O',STR_PAD_LEFT) ;
      $fichier = dirname(__DIR__).DIRECTORY_SEPARATOR.'tuto_php'.DIRECTORY_SEPARATOR.$annee.'-'.$mois.'-'.'*';
      $fichiers = glob($fichier);
            $total = 0;
      foreach ($fichiers as $fichier){
            $vues = (int)file_get_contents($fichier);
            $total += $vues;
      }
      return $total;
}

function nbre_vues_detailmois(int $annee, string $mois): array {
      $mois = str_pad($mois, 2, 'O',STR_PAD_LEFT) ;
      $fichier = dirname(__DIR__).DIRECTORY_SEPARATOR.'tuto_php'.DIRECTORY_SEPARATOR.$annee.'-'.$mois.'-'.'*';
      $fichiers = glob($fichier);
      //on créé un tableau qui va rassembler le jour le nbre de visites
      $visites = [];
      //a l'intérieur de cette boucle, on a besoin de récupérer l'année et le mois
      foreach ($fichiers as $fichier){
            // la fonction basename récupère juste le nom du fichier
            // l'explode récupère dans un tableau l'année, le mois et le jour
            $parties = explode('-',basename($fichier));
            //on créé le tableau
            $visites[]= [
                  'année' =>  $parties[0],
                  'mois' =>  $parties[1],
                  'jour' => $parties[2],
                  'visites'=> file_get_contents($fichier)
            ];
      }
      return $visites;
}

?>
