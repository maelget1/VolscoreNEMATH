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
    if(empty($_COOKIE['dateValue']))
    {
        $dateValue = date("Y-m-d");
    }
    else
    {
        $dateValue = $_COOKIE['dateValue'];
    }
    
    $games = array();

    if($dateValue > date("Y-m-d")){
        // Get data
        $gamesNotSorted = VolscoreDb::getGamesByTime(2);
        foreach($gamesNotSorted as $game){
            $new = explode(" ", $game->moment);
            if($new[0] == $dateValue){
                array_push($games, $game);
            }
        }
    }
    elseif($dateValue == date("Y-m-d")){
        // Get data
        $games = VolscoreDb::getGamesByTime(1);
    }
    

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
    $games = VolscoreDb::getGamesByTime(1);
    require_once 'view/home.php';
}

function showPlayedGames()
{
    // Get data
    $games = VolscoreDb::getGamesByTime(0);
    sort($games, SORT_NUMERIC);
    require_once 'view/playedGames.php';
}

function ShowGame()
{
    $id=$_GET["id"];
    // Get data
    $game = VolscoreDb::getGame($id);
    $actualGame = $game;
    $firstTeam = $game->receivingTeamId;
    $secondTeam = $game->visitingTeamId;
    if($game->category == "M")
    {
        $sexSymbol = "../images/men.png";
    }
    else if($game->category == "F")
    {
        $sexSymbol = "../images/women.png";
    }
    else
    {
        $sexSymbol = "../images/mixt.png";
    }
    $time = explode(" ", $game->moment);
    $hour = $time[1];
    $date = $time[0];
    $team1 = VolscoreDb::getTeam($firstTeam);
    $team2 = VolscoreDb::getTeam($secondTeam);
    $liberoTeam1 = VolscoreDb::getLibero($team1);
    $liberoTeam2 = VolscoreDb::getLibero($team2);
    $captainTeam1 = VolscoreDb::getCaptain($team1);
    $captainTeam2 = VolscoreDb::getCaptain($team2);
    
    
    require_once 'view/game.php';
}

function AddGame()
{
    require_once 'view/AddGame.php';
}

function edit()
{
    require_once 'view/editGames.php';
}

function Mark()
{
    require_once 'view/mark.php';
}
?>
