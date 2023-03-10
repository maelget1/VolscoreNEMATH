<?php 
?>
<html>
<head>
  <title>Créer un match de volley</title>
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

        <label for="heure">Heure</label>
        <input type="text" name="heure" id="heure" required>
      </div>
      <div>
         <label for="visiteur">Equipe visiteur</label>
        <input type="text" name="visiteur" id="visiteur" required>
      </div>
    </div>

    <br>
    <label for="equipe1">Équipe 1:</label>
    <input type="text" name="equipe1" id="equipe1" required>
    <br>
    <label for="equipe2">Équipe 2:</label>
    <input type="text" name="equipe2" id="equipe2" required>
    <br>
    <label for="type">Type de match:</label>
    <select name="type" id="type" required>
      <option value="amical">Amical</option>
      <option value="championnat">Championnat</option>
      <option value="tournoi">Tournoi</option>
    </select>
    <br>
    <label for="joueurs">Type de joueur:</label>
    <input type="radio" name="joueurs" id="joueurs_loisir" value="loisir" checked>
    <label for="joueurs_loisir">Loisir</label>
    <input type="radio" name="joueurs" id="joueurs_compet" value="compet">
    <label for="joueurs_compet">Compétition</label>
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