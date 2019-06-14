<?php
include_once 'header.php';
include 'base.php';
include 'session.php';
$annee = (int)date('Y');
$annee_selection = empty($_GET['annee'])? null :(int)$_GET['annee'];
$mois_selection = empty($_GET['mois'])? null :$_GET['mois'];

if($annee_selection && $mois_selection){
      $total = nbre_vues_mois($annee_selection, $mois_selection);
      $detail = nbre_vues_detailmois($annee_selection, $mois_selection);
} else {
      $total += $compteur;
}
$mois = [
      '01' =>'janvier',
      '02' =>'Février',
      '03' =>'Mars',
      '04' =>'Avril',
      '05' =>'Mai',
      '06' =>'Juin',
      '07' =>'Juillet',
      '08' =>'Aout',
      '09' =>'Septembre',
      '10' =>'Octobre',
      '11' =>'Novembre',
      '12' =>'Décembre'
];
?>
<div class="row">
      <div class="col-md-4">
            <div class="list-group">
                  <?php for($i = 0; $i < 5;$i++): ?>
                        <a class="list-group-item <?= $annee-$i === $annee_selection ?'active':'';?>" href="dash.php?annee=<?= $annee-$i ?>"><?= $annee-$i ?></a>
                  <?php if($annee-$i === $annee_selection): ?>
                        <div class="list-group">
                              <?php foreach ($mois as $numero => $moi): ?>
                              <a class="list-group-item <?= $numero === $mois_selection ?'active':'';?>" href="dash.php?annee=<?= $annee_selection ?>&mois=<?= $numero ?>">
                                    <?= $moi ?>
                              </a>
                              <?php endforeach ; ?>
                        </div>
                  <?php endif; ?>
            <?php endfor ?>
            </div>
      </div>
      <div class="col-md-8">
            <div class="card">
                  <div class="card mb-8">

                  <div class="card-body">
                              <strong style="font-size:3em;">
                                    <?php echo $total ?> visite<?= $total>1 ?'s':'' ; ?></strong>
                        <br />au total
                  </div>
                  <?php if(isset($detail)){ ?>
                        <h2>Détail des visites pour le mois</h2>
                        <table class="table table-striped">
                              <thead>
                                    <tr>
                                          <th> Jour  </th>
                                          <th> Nbre de visites </th>
                                    </tr>
                              </thead>
                              <tbody>
                              <?php foreach($detail as $ligne){?>
                                    <tr>
                                          <td> <?= $ligne['jour'] ?> </td>
                                          <td> <?= $ligne['visites'] ?> visite<?=$ligne['visites']>1 ? 's' : '' ?></td>
                                    </tr>
                              <?php }   ?>
                              </tbody>

                        </table>

                  <?php } ?>
            </div>
            </div>
      </div>
</div >
