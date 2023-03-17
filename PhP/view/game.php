<?php
ob_start();
$title = $actualGame->receivingTeamName.'-'.$actualGame->visitingTeamName;
?>
<p>Page en dévelopement</p>
<a href="?action=playedGames"><button type="button" class="btn btn-primary">Retour</button><a>
<br><br>

<h1>Résultats du match</h1>
<div >
    <div><?=$actualGame->moment?></div>
</div>
<table class="table table-bordered border-dark">
  <tr><th><?=$actualGame->receivingTeamName?></th><th><?=$actualGame->scoreReceiving?></th><th class="mx-auto"><?=$actualGame->league?> <?=$actualGame->type?></th><th><?=$actualGame->scoreVisiting?></th><th><?=$actualGame->visitingTeamName?></th></tr>
  <tr><td class="mr-5">Capitaine: N°32<?php ?></td></tr>
  <tr><td class="mr-5">Libero(s): <?=$liberoTeam1?></td></tr>
  <tr><td class="mr-5">Carton(s): N°3  <?php ?><img src="..\images\cartonRouge.png" alt="carton rouge"></td></tr>
</table>


<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>