<?php
$title = 'Matches';

ob_start();
?>
<div class="d-flex justify-content-between">
<h1>Marquer un match</h1>
<input class="custom-date-input" type="date" value="<?= date($dateValue)?>" id="dateInput" name="dateInput" onchange="GetChange(event);">
<button class="custom-button" onclick="GetChangeMinus()">
<img src="../images/leftArrow.png">
</button>
<button class="custom-button" onclick="GetChangePlus()">
<img src="../images/rightArrow.png">
</button>
</div>
<table class="table table-bordered">
    <thead>
        <tr><th>Recevante</th><th>Visiteur</th><th>Heure</th><th>Détail</th></tr>
    </thead>
    <tbody>
    <?php
    foreach ($games as $game)
    {
        $hour = explode(" ",$game->moment);
        ?>
        <tr><td><?=$game->receivingTeamName?></td><td class='justify-content-between d-flex'><?=$game->visitingTeamName?></td><td><?=$hour[1]?></td><td><button onclick="myScript(<?=$game->number?>)">?</button></td></tr>
        <tr id="<?=$game->number?>" style="display: none;"><td>Salle: <?=$game->place?><br>Ligue: <?=$game->type?><br>Niveau: <?=$game->level?><br>Catégorie: <?=$game->category?></td>
        <?php
        echo '<td><a href="?action=mark&id='.$game->number.'" class="link"><button>Marquer</button></a></td>';
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

  function GetChange(e){
    var dateArr = e.srcElement.value.split('-');
    // Make sure we are dealing with an array of at least length 2
    if (dateArr.length > 1) {
   	  // Format the date as needed
   	  // Currently mm/dd/yyyy
       document.cookie = "dateValue = " + dateArr[0] + '-' + dateArr[1] + '-' + dateArr[2];
       location.reload();
    }
  } 

  function GetChangePlus(){
    var date = document.getElementById('dateInput').value;
    var ok = new Date(date);
    var year = ok.getFullYear();
    var month = ok.getMonth()+1;
    var day = ok.getDate()+1;
    if(month < 10){
      month = "0" + month;
    }
    if(day < 10){
      day = "0" + day;
    }
    if(day)
    document.cookie = "dateValue = " + year + '-' + month + '-' + day;
    location.reload();
  }

  function GetChangeMinus(){
    var date = document.getElementById('dateInput').value;
    var ok = new Date(date);
    var year = ok.getFullYear();
    var month = ok.getMonth()+1;
    var day = ok.getDate()-1;
    if(month < 10){
      month = "0" + month;
    }
    if(day < 10){
      day = "0" + day;
    }
    if(day)
    document.cookie = "dateValue = " + year + '-' + month + '-' + day;
    location.reload();
  }
</script>

<a href='?action=AddGame'><button type="button" class="btn btn-success">Ajouter</button></a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

