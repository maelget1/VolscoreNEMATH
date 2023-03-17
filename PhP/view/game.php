<?php
ob_start();
$title = $actualGame->receivingTeamName.'-'.$actualGame->visitingTeamName;
?>
<p>Page en dévelopement</p>
<a href="?action=playedGames"><button type="button" class="btn btn-primary">Retour</button><a>
<br><br>

<h1>Résultats du match</h1>
  <div class="container my-5">
    <div class="row">
      <div class="col-4 text-start p-3">
        <p><?=$actualGame->moment?></p>
      </div>
      <div class="col-4 text-center p-3">
        <p><?=$actualGame->place?></p>
      </div>
      <div class="col-4 text-end p-3">
        <p>Aligné à droite</p>
      </div>
    </div>
  </div>
<table class="table table-bordered border-dark">
  <tr><th><?=$actualGame->receivingTeamName?></th><th><?=$actualGame->scoreReceiving?></th><th class="mx-auto"><?=$actualGame->league?> <?=$actualGame->type?></th><th><?=$actualGame->scoreVisiting?></th><th><?=$actualGame->visitingTeamName?></th></tr>
  <tr><td class="mr-5">Capitaine: N°<?=$captainTeam1->number?></td>Capitaine: N°<?=$captainTeam2->number?></tr>
  <tr><td class="mr-5">Libero(s): N°<?=$liberoTeam1->number?></td><td>Libero(s): N°<?=$liberoTeam2->number?></td></tr>
  <tr><td class="mr-5">Carton(s): N°3  <?php ?><img src="..\images\cartonRouge.png" alt="carton rouge"></td></tr>
</table>


<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>