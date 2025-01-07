<?php

    $isLogged = true;
    
    if(!$isLogged){
        header("location:../controller/homeController.php");
    }

    $title = "Mon compte";
    $subtitle = "Mes info qu'à moi";
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
        [
            "label" => "Mon compte",
            "path" => "../controller/accountController.php"
        ]
    ];

    require_once("../view/accountView.php");