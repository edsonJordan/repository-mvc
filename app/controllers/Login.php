<?php 
class Login extends Controller{
     private $db;
     private $user=[];
    public function __construct()
    {
        $this->articuloModelo = $this->modelo('Usuario');  
       $this->usuarioModelo = $this->modelo('Usuario');
        session_start(); 
        date_default_timezone_set('America/Lima');
    }
    public function index()
    {    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $a=$_POST['correo'];
                $b=$_POST['pass'];
                $cantidad=0;
                $busqueda=$this->usuarioModelo->consultaUsuario($a);
               $objeto=$this->usuarioModelo->consultar($a);
                if (password_verify($b, $busqueda['pass'])){
                        $cantidad++;
                }
                if   ($cantidad>0){
                    $_SESSION['datos']='ok';
                    $fecha =  date("Y-m-d H:i:s");
                    $usuario = $this->usuarioModelo->obtenerUsuariosId($busqueda['cod_cliente']);
                    $_SESSION['codigo'] = $usuario->cod_cliente;
                    $datos = [
                        'codigo' => trim($_SESSION['codigo']),
                        'fecha' => trim($fecha)
                    ];
                    $this->usuarioModelo->agregarTiempo($datos); 
                    rediccionar('home');
                }
                else{
                   session_destroy();
                   rediccionar('login');  
               }
        }
        $this->vista('login');
    }
    public function templates(){  
        //instancio la funcion donde retorna el objeto
        //$datos = ['articulos' => $usuario];
        $this->vista('/templates/header');
    }  
    public function agregar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $f=$_POST['pass'];
        $corporacion=$_POST['name_corporacion'];
        $ruc=$_POST['ruc'];
        if($corporacion==null){
            $corporacion = "sin corporacion";
        }
        if($ruc==null){
            $ruc = 0;
        }
            $cifrado=password_hash($f, PASSWORD_DEFAULT);
            $datos = [
                'name_cliente' => trim($_POST['name_cliente']),
                'apellido_paterno' => trim($_POST['apellido_paterno']),
                'apellido_materno' => trim($_POST['apellido_materno']),
                'correo' => trim($_POST['correo']),
                'pass' => trim($cifrado),
                'name_corporacion' => trim($corporacion),
                'ruc' => trim($ruc),
                'pais' => trim($_POST['pais']),
                'telefono' => trim($_POST['telefono']),
                'sexo' => trim($_POST['sexo'])
            ];
            if($this->usuarioModelo->agregarUsuario($datos)){
                rediccionar('login');
            }
            else{
                die('algo salio mal');
            }
            }else{
                $datos = [
                    'name_cliente' => '',
                    'apellido_paterno' => '',
                    'apellido_materno' => '',
                    'pass' => '',
                    'name_corporacion' => '',
                    'ruc' => '',
                    'pais' => '',
                    'telefono' => '',
                    'correo' => '',
                    'sexo' => ''
                ];
                $this->vista('/agregar', $datos);
            
        }
    }
    public function editar($id){
        
    }
    public function cerrar(){
        $idsession=$this->usuarioModelo->obtenerUsuariosIdsession($_SESSION['codigo']);
$id=$idsession->id;
$hora =  date("H:i:s");
$datos = [
        'id' => trim($id),
        'finsession' => trim($hora)
    ];
if($this->usuarioModelo->cierresession($datos)){
     $this->vista('cerrar');
}
else{
    die('algo salio mal');
}

        
       
    }
}
?>