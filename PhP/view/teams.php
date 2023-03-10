<?php
$title = 'Equipes';
session_start();
ob_start();
?>

<h1>Equipes</h1>
<ul>

<?php
foreach ($teams as $team)
{
    ?>
    <li><?=$team->name?><a href="https://www.google.com"><img src="..\images\loupe.png" class="img-fluid" alt="Details"></a></li>
    <?php
}
?>
</ul>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
//valeur de la dernière page visitée
$_SESSION["lastPage"]=$_SERVER["HTTP_HOST"];
$_SESSION["lastPage"] .= $_SERVER['REQUEST_URI'] ;
?>
