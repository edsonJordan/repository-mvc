<?php 
    //clase para conectarse a la base de datos y ejecutar consulta
    class Base{
        private $host = DB_HOST;
        private $usuario = DB_USER;
        private $password = DB_PASSWORD;
        private $nombre_base = DB_NAME;

        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->nombre_base;
            $opciones = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            //crear una instancia de DPO
            try {
                $this->dbh =new PDO($dsn, $this->usuario, $this->password, $opciones);
               $this->dbh->exec('set names utf8');
            } catch (PDOException $e) {
               $this->error = $e->getMessage();
               echo $this->error;
            }
        }
        //Preparamos la consulta
        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
        }
        //Vinculamos la consulta con el metodo bind
        public function bind($parametro, $valor, $tipo=null){
            if(is_null($tipo)){
                switch (true){
                    case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;
                    case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;
                    case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;
                    default:
                    $tipo = PDO::PARAM_STR;
                    break;
                    
                }
            }
            $this->stmt->bindValue($parametro, $valor, $tipo);
        }
        //Ejecutamos la consulta
        public function execute(){
            return $this->stmt->execute();
        }
        //Obtenemos todos los reguistros
        public function registros(){
            $this->execute();
            return $this->stmt->fetchALL(PDO::FETCH_OBJ);
        }
        //Obtenemos un solo reguistro
        public function registro(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
        public function consultas(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function consulta(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }
        //Obtener la cantidad de registros
        public function rowCount(){
            return $this->stmt->rowCount;
        }
    }
?>