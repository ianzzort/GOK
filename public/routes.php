<?php

    include './src/static/header.view.php';

    if(!isset($_GET['view'])){
        header('Location: ?view=main');
    }else {

        $view = $_GET['view'];

        switch ($view ) {
            case 'main':
                include './public/main.php';
                break;
            case 'lobby':
                include './public/lobby.php';
                break;
                
            case 'world':
                include('./public/world.php');
                break;
                
            default:
                # code...
                break;
        }

    }
