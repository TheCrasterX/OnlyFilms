<?php
    class BBDD {
        private $servidor;
        private $user;
        private $pass;
        private $base_datos;
        private $puerto;
        private $socket;
        private $descriptor;
        private $resultado;

        function __construct($servidor, $user, $pass, $base_datos, $puerto, $socket) {
            $this->servidor = $servidor;
            $this->user = $user;
            $this->pass = $pass;
            $this->base_datos = $base_datos;
            $this->puerto = $puerto;
            $this->socket = $socket;
            $this->descriptor = mysqli_connect($this->servidor, $this->user, $this->pass, $this->base_datos, $this->puerto, $this->socket);
        }

        public function consulta($consulta) {
            $this->resultado = mysqli_query($this->descriptor, $consulta);
        }

        public function extraer_registro(){
            if ($fila =  mysqli_fetch_array($this->resultado, MYSQLI_ASSOC)) {
                return $fila;
            } else {
                return false;
            }
        }
    }
    
    $host="127.0.0.1";
    $port=3306;
    $socket="";
    $user="root";
    $password="";
    $dbname="onlyfilms";

    $MyBBDD = new BBDD($host, $user, $password, $dbname, $port, $socket);

    if(isset($_POST['registrar'])) {
        $sql = "INSERT INTO only_users (usuario, pass, email, fechNacimiento) VALUES ('".$_POST['user']."','".$_POST['pass']."','".$_POST['email']."', '".$_POST['birthDate']."')";
        $MyBBDD->consulta($sql);//Envia la sentencia sql a la bbdd
        echo 'fin de ejecucion';
    }
?>
    