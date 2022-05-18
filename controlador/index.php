<?php
    require_once("modelo/index.php");
    class modeloController{
        private $model;
        function __construct(){
            $this->model = new Modelo();
        }

        // Mostrar registros
        static function index(){
            $producto = new Modelo();
            $dato = $producto->mostrar("productos","1");
            require_once("vista/index.php");
        }
    
        // NUEVO retorna hacia una vista
        static function nuevo(){
            require_once("vista/nuevo.php");
        }

        //guardar
        static function guardar(){
            $nombre=$_REQUEST['nombre'];
            $precio=$_REQUEST['precio'];
            $data = "'".$nombre."',".$precio;
            $producto = new Modelo();
            $dato = $producto->insertar("productos",$data);
            header("location:".urlsite);
            //header("location/vista/index.php");
        }

        // Editar
        static function editar(){
            $id = $_REQUEST['id'];
            $producto = new Modelo();
            $dato = $producto->mostrar("productos","id=".$id);
            require_once("vista/editar.php");
        }

        //Actualizar
        static function actualizar(){
            $id = $_REQUEST['id'];
            $nombre=$_REQUEST['nombre'];
            $precio=$_REQUEST['precio'];
            $data = "nombre='".$nombre."',precio=".$precio;//aqui esta la onda, atento a las comillas
            $producto = new Modelo();
            $dato = $producto->actualizar("productos",$data,"id=".$id);
            header("location:".urlsite);
            //header("/vista/index.php");
        }
        // Redireccionar a login
        static function loginIn(){
            require_once("vista/login.php");
        }

        // Logearse en el sistema
        static function login(){
            
            $correo = $_REQUEST['correo'];
            $clave = $_REQUEST['clave'];
            $data = "correo='".$correo."' and clave='".$clave."'";
            $usuario = new Modelo();
            $user = $usuario->validar("login",$data);
            if($user){
                session_start();
                $_SESSION['usuario'] = $user->usuario;
                //require_once("vista/index.php");
                header("location:".urlsite);
            }else{
                header("location:".urlsite);
            }
        }

        static function logout(){
            session_unset();
            session_destroy();
            header("location:".urlsite);
        }

        static function eliminar(){
            $id = $_REQUEST['id'];
            $producto = new Modelo();
            $dato = $producto->eliminar("productos","id=".$id);
            header("location:".urlsite);
            //require_once("vista/editar.php");
        }

    }
?>