<?php
$title = 'Matches joués';
ob_start();
?>
<div class="card" style="width: 75rem;">
    <div class="card-header justify-content-center d-flex">
    Liste des matches joués
    </div>
    <ul class="list-group list-group-flush">
        <?php
            foreach ($games as $game)
            {
                
                echo '<a href="?action=game&id='.$game->number.'" class="link">';
                ?>
                <ul class="list-inline d-flex justify-content-around"><li class="list-inline-item"><?=$game->receivingTeamName?>-<?=$game->scoreReceiving?></li><li class="list-inline-item"><?=$game->moment?></li><li class="list-inline-item"><?=$game->scoreVisiting?>-<?=$game->visitingTeamName?></li></ul></a>
                <?php
            }
        ?>
    </ul>
</div>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

