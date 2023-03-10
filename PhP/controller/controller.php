<?php

/**
 * Display list of teams
 */
function showTeams()
{
    // Get data
    $teams = VolscoreDb::getTeams();

    // Prepare data: nothing for now

    // Go ahead and show it
    require_once 'view/teams.php';
}

/**
 * Display list of games
 */

function showGames()
{
    // Get data
    $games = VolscoreDb::getGames();

    // Prepare data: nothing for now

    // Go ahead and show it
    require_once 'view/games.php';
}

function executeUnitTests() 
{
    require 'unittests.php';
}

function showTodaysGames()
{
    //Get data
    $games = VolscoreDb::getGames();
    $tGames = array();
    foreach($games as $game){
        $pieces = explode(" ", $game->moment);
        if($pieces[0] == date("Y-m-d"))
        {
            array_push($tGames, $game);
        }
    }
    $hour = $pieces[1];

    require_once 'view/home.php';
}

function showPlayedGames()
{
    // Get data
    $games = VolscoreDb::getGamesByTime("Past");
    asort($games);
    require_once 'view/playedGames.php';
}

function ShowGame()
{
    $id=$_GET["id"];
    // Get data
    $games = VolscoreDb::getGames();
    foreach($games as $game)
    {
        if($games->id == $id)
        {
            $actualGame = $game;
        }
    }
    
    require_once 'view/game.php';
}
?>
