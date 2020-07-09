<?php
        //clase controlaor principal 
        //se encarga de controlar los modelos y las vistas
        class Controller{
            public $data=[];
            //cargar modelo
            public function modelo($modelo){
                //carga modelo
                require_once '../app/models/' . $modelo . '.php';
                //Instanciar el modelo
                return new $modelo();
            }
            public function vista($vista, $datos = []){
                //chequear si vista existe
                if(file_exists('../app/views/' . $vista . '.php')){
                    //carga vista
                    require_once '../app/views/' . $vista . '.php';
                }else{
                    //si no existe
                    die('la vista no existe o no tienes permiso para entrar');
                }
            }
            //seguridad
            public function seguridad(){
               session_start();
                if($_SESSION['datos']=='ok'){
                    // nadaaaaaa
                   
                }else{
                    rediccionar('login');
                }
            }
            public function close()
            {
                session_unset();
                session_destroy();
                rediccionar('login');
            }
            public function login(){
            }
            //funcion donde recojo el objeto asignandolo a una session
            public function setussercurrent($valor){
                $this->data = $valor;
            }
             //funcion donde retorno el objeto asignando a una session
            public function getussercurrent(){
                return $this->data;
            }

             //cargar vista
        }

  
?>