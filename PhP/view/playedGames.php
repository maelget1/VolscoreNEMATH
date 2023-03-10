<?php
$title = 'Matches joués';
ob_start();
?>
<div class="card" style="width: 75rem;">
    <div class="card-header justify-content-center flex">
    Liste des matches joués
    </div>
    <ul class="list-group list-group-flush">
        <?php
            foreach ($games as $game)
            {
                ?>
                <a href='?action=game&id=".$game->id."'><li class="list-group-item"><ul><?=$game->receivingTeamName?></ul>  <ul><?=$game->moment?></ul> <ul><?=$game->visitingTeamName?></ul></li></a>
                <?php
            }
        ?>
    </ul>
</div>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

