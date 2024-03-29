<?php
$title = 'Accueil';
ob_start();
?>
<div class="card" style="width: 75rem;">
    <div class="card-header justify-content-center d-flex">
    Liste des matches du jour
    </div>
    <ul class="list-group list-group-flush">
        <?php
            foreach ($games as $game)
            {
                ?>
                <a href='?action=game&id=".$game->id."' class="link"><ul class="list-inline d-flex justify-content-around"><li class="list-inline-item"><?=$game->receivingTeamName?></li><li><?=$game->visitingTeamName?></li><li class="list-inline-item"><?=$game->moment?></li></ul></a>
                <?php
            }
        ?>
    </ul>
</div>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

