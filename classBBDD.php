<?php
session_start();
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
//Esta funcion nos permite registrar a los usuarios en la bbdd e iniciarles sesion automaticamente
    if(isset($_POST['registrar'])) {
        $sql = "INSERT INTO only_users (usuario, pass, email, fechNacimiento) VALUES ('".$_POST['user']."','".$_POST['pass']."','".$_POST['email']."', '".$_POST['birthDate']."')";
        $MyBBDD->consulta($sql);
        echo "<form action='index.php' method='post'>
            <input type='submit' name='perfil' value='Perfil'><br>
            </form>";
            $_SESSION['UsuarioIniciado'] = $_POST['user'];
            $_SESSION['ContraUsuario'] = $_POST['pass'];
            echo $_SESSION['UsuarioIniciado'];
            echo $_SESSION['ContraUsuario'];
    }
    /*Esta función no permite iniciar sesion con un usuario que no exista en la bbdd y se cuelga por ello*/
    if(isset($_POST['entrar'])){
        $_SESSION['UsuarioIniciado'] = $_POST['user'];
        $_SESSION['ContraUsuario'] = $_POST['pass'];
        if(isset( $_SESSION['UsuarioIniciado']) || isset( $_SESSION['ContraUsuario'])) {
            $sql = "SELECT pass FROM only_users WHERE usuario='".$_SESSION['UsuarioIniciado']."'";
            $MyBBDD->consulta($sql);
            while ($fila = $MyBBDD->extraer_registro()) {
                foreach ($fila as $indice => $valor) {
                    if($valor ==  $_SESSION['ContraUsuario']) {
                        echo "<form action='index.php' method='post'>
                            <input type='submit' name='perfil' value='Perfil'><br>
                            </form>";
                    } else {
                        echo "<form action='login.php' method='post'>
                            <input type='submit' name='login' value='Volver a login'><br>
                            </form>";
                    }
                }
            }
        }
    }
//Esta funcion nos permite publicar los mensajes de los usuarios y registrarlos en la bbdd
//En algun punto de la funcion se queda almacenado el comentario y comienza a repetirse y a insertarlo varias veces
    if(isset($_POST['publicar'])) {
        $publicacion = $_POST['publicacion'];
        $sql = "INSERT INTO only_post (usuario, comentario, fecha) VALUES ('".$_SESSION['UsuarioIniciado']."', '". $publicacion ."', SYSDATE())";
        $MyBBDD->consulta($sql);
        unset($publicacion);
        unset($_POST['publicacion']);
    }
?>
    