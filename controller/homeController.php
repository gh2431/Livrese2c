<?php
    $isLogged = true;
    $title = "Silence on Lit à l'E2C";
    $subtitle = "Lire c'est bien";
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

    if($isLogged){
        $navButtons[]= [
            "label" => "Mon compte",
            "path"=> "../controller/accountController.php"
        ];
    }

    //var_dump($navButtons);

    require_once("../view/homeView.php");

