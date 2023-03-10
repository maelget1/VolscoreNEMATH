<?php
$title = 'Matches';

ob_start();
?>
<!--<a href='?action=game&id=".$game->id."'><input class='favorite styled mt-auto' type='button' value='Marquer'></a>"-->
<h1>Matchs du jour</h1>
<table class="table table-bordered">
    <thead>
        <tr><th>Recevante</th><th>Visiteur</th><th>Heure</th></tr>
    </thead>
    <tbody>
    <?php
    //explode(string $separator, string $string, int $limit = PHP_INT_MAX)
    foreach ($games as $game)
    {
        echo "<tr><td>$game->receivingTeamName.</td><td class='justify-content-between d-flex'>$game->visitingTeamName.</td><td>$game->moment</td></tr>";
    }
    ?>
    </tbody>
</table>

<a href='?action=AddGame'><button type="button" class="btn btn-success">Ajouter</button></a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

