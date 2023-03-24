<?php
$title = 'Matches';

ob_start();
?>
<!--<a href='?action=game&id=".$game->id."'><input class='favorite styled mt-auto' type='button' value='Marquer'></a>"-->
<h1>Matchs du jour</h1>
<table class="table table-bordered">
    <thead>
        <tr><th>Recevante</th><th>Visiteur</th><th>Heure</th><th>Détail</th></tr>
    </thead>
    <tbody>
    <?php
    //explode(string $separator, string $string, int $limit = PHP_INT_MAX)
    foreach ($games as $game)
    {
        
        ?>
        <tr><td><?=$game->receivingTeamName?></td><td class='justify-content-between d-flex'><?=$game->visitingTeamName?></td><td><?=$game->moment?></td><td><button onclick="myScript(<?=$game->number?>)">?</button></td></tr>
        <tr id="<?=$game->number?>" style="display: none;"><td>Salle: <?=$game->place?><br>Ligue: <?=$game->type?><br>Niveau: <?=$game->level?><br>Catégorie: <?=$game->category?></td>
        <?php
        echo '<td><a href="?action=game&id='.$game->number.'" class="link"><button>Marquer</button></a></td>';
        ?>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

<script>
    function myScript(id){
        var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
    }
</script>

<a href='?action=AddGame'><button type="button" class="btn btn-success">Ajouter</button></a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

