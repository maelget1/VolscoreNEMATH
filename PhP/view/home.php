<?php
$title = 'Accueil';
ob_start();
?>
<div class="card" style="width: 18rem;">
    <div class="card-header">
    Liste des matches du jour
    </div>
    <ul class="list-group list-group-flush">
        <?php
            foreach ($tGames as $game)
            {
                ?>
                <li class="list-group-item"><?=$game->receivingTeamName?>-<?=$game->visitingTeamName?> <?=$hour?></li>
                <?php
            }
        ?>
    </ul>
</div>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

