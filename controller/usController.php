<?php
    $title = "Qui somme nous ?";
    $subtitle = "La Team de la prépa numérique";
    $navButtons = 
    [
        [
            "label" => "Accueil",
            "path" => "../controller/homeController.php"
        ],
        [
            "label" => "Bibliothéque",
            "path" => "../controller/libraryController.php"
        ],
        [
            "label" => "Espace détente",
            "path" => "../controller/gameController.php"
        ],
        [
            "label" => "Qui sommes nous ?",
            "path" => "../controller/usController.php"
        ],
    ];

    require_once("../view/usView.php");
