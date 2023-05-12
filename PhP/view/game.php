<?php
ob_start();
$title = $actualGame->receivingTeamName.'-'.$actualGame->visitingTeamName;
?>
<a href="?action=playedGames"><button type="button" class="btn btn-primary">Retour</button><a>
<a href="?action=playedGames"><button type="button" class="btn styled">Télécharger</button><a>
<br><br>

<h1>Résultats du match</h1>
  <div class="container">
    <div class="row">
      <div class="col-4 text-start p-3">
        <p>Date : <?=$date?></p>
      </div>
      <div class="col-4 text-center p-3">
        <p>Lieu : <?=$actualGame->place?></p>
      </div>
      <div class="col-4 text-end p-3">
        <p>Heure : <?=$hour?></p>
      </div>
    </div>
  </div>
<table class="table table-bordered border-dark">
  <tr class="text-center"><th><?=$actualGame->receivingTeamName?> <img src="<?=$sexSymbol?>" alt="sexe de la team"></th><th><?=$actualGame->scoreReceiving?></th><th><?=$actualGame->league?> <?=$actualGame->type?></th><th><?=$actualGame->scoreVisiting?></th><th><?=$actualGame->visitingTeamName?> <img src="<?=$sexSymbol?>" alt="sexe de la team"></th></tr>
  <tr><td class="mr-5">Capitaine: N°<?=$captainTeam1->number?></td><td class="noRightBorder"></td><td class="noRightBorder noLeftBorder"><td class="noLeftBorder"></td></td><td class="text-end">Capitaine: N°<?=$captainTeam2->number?></p></td></tr>
  <tr><td class="mr-5">Libero(s): N°<?=$liberoTeam1->number?></td><td class="noRightBorder"></td><td class="noRightBorder noLeftBorder"><td class="noLeftBorder"></td></td></td><td  class="text-end"style="margin-left: 120px">Libero(s): N°<?=$liberoTeam2->number?></td></tr>
  <tr><td class="mr-5">Carton(s): N°<?= $cardTeam1->number ?><img src="..\images\cartonRouge.png" alt="carton rouge"></td class="noRightBorder"></td><td class="noRightBorder noLeftBorder"></td><td class="noLeftBorder noRightBorder"><td class="noLeftBorder"></td><td class="mr-5 text-end">Carton(s): N°7<img src="..\images\cartonJaune.png" alt="carton jaune"></td></tr>
</table>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>