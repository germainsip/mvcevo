<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/style.css">
    <title><?= $titre ?></title>
</head>
<body>
<div id="global">
    <header>
        <a href="index.php">
            <h1 id="titreBlog">Mon BLog</h1>
        </a>
        <p>Hello et bienvenue !!!!</p>
    </header>
    <div id="contenu">
        <?= $contenu; ?>
    </div>
    <footer id="piedBlog">
        Blog exercice pour mettre en évidence les modifications pour obtenir un MVC
    </footer>
</div>
</body>
</html>
