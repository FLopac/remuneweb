<?php
require_once("config.php");
require_once("controlador/index.php");

    if(isset($_GET['m'])):
        if(method_exists('modeloController', $_GET['m'])):
            modeloController::{$_GET['m']}();
        endif;
    
    else:
        session_start();
        $usuario = $_SESSION['usuario'];
        if(!isset($usuario)){
            session_destroy();
            modeloController::loginIn();
        }else{
            modeloController::index();
        }
    endif;
    
        
    
        
    
    


?>