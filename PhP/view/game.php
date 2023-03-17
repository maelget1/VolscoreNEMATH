<?php
ob_start();
$title = $actualGame->receivingTeamName.'-'.$actualGame->visitingTeamName;
?>
<p>Page en dévelopement</p>
<a><button type="button" class="btn btn-primary">Retour</button><a>
<br><br>

<table class="table table-bordered border-dark">
  <tr><th>Montreux</th><th>Score</th><th>Ligue et type</th><th>Score 2</th><th>Vevey</th></tr>
  <tr><td class="mr-5">Capitaine: N°32<?php ?></td></tr>
  <tr><td class="mr-5">Libero(s): N°45<?php ?></td></tr>
  <tr><td class="mr-5">Carton(s): N°3  <?php ?><img src="..\images\cartonRouge.png" alt="carton rouge"></td></tr>
</table>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>