<?php
require_once("config.php");
require_once("controlador/index.php");

    session_start();

    if(isset($_GET['m'])):
        if(method_exists('modeloController', $_GET['m'])):
            modeloController::{$_GET['m']}();
        endif;

    elseif(isset($_SESSION['usuario'])):
         modeloController::index();

    else:
        //modeloController::index();
        modeloController::loginIn();
    endif;
    
        
    
        
    
    


?>