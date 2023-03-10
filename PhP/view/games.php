<?php
$title = 'Matches';

ob_start();
?>

<h1>Matchs</h1>
<table class="table table-bordered">
    <thead>
        <tr><th>Numéro</th><th>Recevante</th><th>Visiteur</th><th>Score</th></tr>
    </thead>
    <tbody>
    <?php
    foreach ($games as $game)
    {
        echo "<tr><td>".$game->id."</td><td>".$game->receivingTeamName."</td><td class='justify-content-between d-flex'>".$game->visitingTeamName."<a href='?action=game&id=".$game->id."'><input class='favorite styled mt-auto' type='button' value='Marquer'></a></td></tr>";
    }
    ?>
    </tbody>
</table>

<a href='?action=AddGame'><button type="button" class="btn btn-success">Ajouter</button></a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

