<?php
$title = 'Equipes';
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    h1 {
      color: #333333;
      text-align: center;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    li {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px;
      background-color: #ffffff;
      border-radius: 5px;
      margin-bottom: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    li img {
      width: 20px;
      height: 20px;
    }

    a {
      color: #333333;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <h1>Equipes</h1>
  <ul>
    <?php foreach ($teams as $team) { ?>
      <li>
        <?=$team->name?>
        <a href="https://www.google.com">
          <img src="..\images\loupe.png" class="img-fluid" alt="Details">
        </a>
      </li>
    <?php } ?>
  </ul>
</body>
</html>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
//valeur de la dernière page visitée
$_SESSION["lastPage"]=$_SERVER["HTTP_HOST"];
$_SESSION["lastPage"] .= $_SERVER['REQUEST_URI'] ;
?>
