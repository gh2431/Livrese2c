<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bibliothèque E2C</title>
        <link rel="stylesheet" href="../style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
        <script type="module" src="../script/test.js"></script>
        <script type="module" src="../script/nav.js"></script>
    </head>
    <body>
        <?php
            require_once("../module/_header.php");
            require_once("../module/_nav.php");
        ?>
        <main>
            <h3><?= "Bonjour $username!"?></h3>
        </main>
        <div id="trigger"></div>
    </body>
</html>