<?php
error_reporting(E_ERROR);
$action = isset($_GET['action']) ? $_GET['action'] : 'home';
require_once 'controller/controller.php';
require_once 'model/VolscoreDB.php';
require_once 'vendor/autoload.php';

switch ($action)
{
    case 'teams':
        showTeams();
        break;
    case 'games':
        showGames();
        break;
    case 'unittests':
        executeUnitTests();
        break;
    case 'home':
        showTodaysGames();
        break;
    case 'playedGames':
        showPlayedGames();
        break;
    case 'editGames':
        edit();
        break;
    case 'game':
        ShowGame();
        break;
    case 'AddGame':
        AddGame();
        break;
    case 'mark':
        Mark();
        break;
    default:
        require_once 'view/home.php';
}
?>
