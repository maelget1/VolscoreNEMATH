<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="d-flex flex-column h-100">
<header class="text-center">
    <div class="row mw-100">
        <div class="col">
            <a href="?action=home" class="link">
                <h1>Accueil</h1>
            </a>
        </div>
        <div class="col">
            <a href="?action=teams" class="link">
                <h1>Equipes</h1>
            </a>
        </div>
        <div class="col">
            <a href="?action=editGames" class="link">
                <h1>Gérer</h1>
            </a>
        </div>
        <div class="col">
            <a href="?action=games" class="link">
                <h1>Marquer</h1>
            </a>
        </div>
        <div class="col">
            <a href="?action=playedGames" class="link">
                <h1>Déjà joués</h1>
            </a>
        </div>
    </div>
</header>
<div class="container">
<?= $content ?>
</div>
<footer class="text-center mt-auto" style="background-color:#2C69E8">
    <p>© ETML 2023</p>
</footer>
</body>
</html>
