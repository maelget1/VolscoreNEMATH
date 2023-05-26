<?php 
?>
<html>
<head>
  <title>Créer un match de volley</title>
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

    form {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 3px;
      font-size: 14px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      background-color: #333333;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      border-radius: 3px;
      font-size: 16px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #555555;
    }
  </style>
</head>
<body>
  <h1>Créer un match de volley</h1>
  <form method="post" action="creer_match.php">
    <div style="display:flex;flex-direction:space-between">
      <div>
        <label for="domicile">Equipe à domicile</label>
        <input type="text" name="domicile" id="domicile" required>
      </div>
      <div style="justify-content:center;">
      <label for="date">date :</label>
      <input type="date" name="begin" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31">
        <!--date-->
        <label for="salle">Salle : </label>
        <input type="text" name="salle" id="salle" required>
        <label for="heure">Heure</label>
        <input type="text" name="heure" id="heure" required>
      </div>
      <div>
         <label for="visiteur">Equipe visiteur</label>
        <input type="text" name="visiteur" id="visiteur" required>
      </div>
    </div>
    <br>
    <label for="type">Type de match:</label>
    <select name="type" id="type" required>
      <option value="amical">Amical</option>
      <option value="championnat">Championnat</option>
      <option value="tournoi">Tournoi</option>
    </select>
    <br>
    <h2>Type de joueurs :</h2>
    <label for="joueurs_loisir">Homme</label>
    <input type="radio" name="joueurs" id="joueurs_Homme" value="Homme" texte="homme" checked>
    <label for="joueurs_compet">Femmes</label>
    <input type="radio" name="joueurs" id="joueurs_Femme" value="Femme">
    <label for="joueurs_compet">Mixte</label>
    <input type="radio" name="joueurs" id="joueurs_Mixte" value="Mixte">
    <br>
    <br>
    <label for="numero">Numéro de match:</label>
    <input type="number" name="numero" id="numero" required>
    <br>
    <input type="submit" value="Créer le match">
  </form>
</body>
</html>

<?php
?> 