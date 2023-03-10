<?php
ob_start();
$title = $actualGame->receivingTeamName.'-'.$actualGame->visitingTeamName;
var_dump($actualGame)
?>
<a><button type="button" class="btn btn-primary">Retour</button><a>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>