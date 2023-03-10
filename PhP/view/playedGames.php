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
                <a href='?action=game&id=".$game->id."'><ul class="list-inline"><li class="list-inline-item"><?=$game->receivingTeamName?></li>  <li class="list-inline-item"><?=$game->moment?></li> <li class="list-inline-item"><?=$game->visitingTeamName?></li></ul></a>
                <?php
            }
        ?>
    </ul>
</div>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

