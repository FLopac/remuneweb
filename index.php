<?php
require_once("config.php");
require_once("controlador/index.php");

    /* if(isset($_GET['m'])):
        if(!isset($_SESSION["usuario"])){
            if(method_exists('modeloController', $_GET['m'])):
                modeloController::{$_GET['m']}();
            endif;
        }
        else{
            modeloController::loginIn();
        } */
    if(isset($_GET['m'])):
        if(method_exists('modeloController', $_GET['m'])):
            modeloController::{$_GET['m']}();
        endif;

    else:
        modeloController::loginIn();

        /* session_start();
        $usuario = $_SESSION['usuario'];
        if(!isset($usuario)){

            session_destroy();
            
        }else{
            modeloController::index();
        } */
        
    endif;
    
        
    
        
    
    


?>