<?php
session_start();
echo  '<script>
window.onload=function(){
    document.forms["miformulario"].submit();
}
</script>';
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
            $_SESSION['UsuarioIniciado'] = $_POST['user'];
            $_SESSION['ContraUsuario'] = $_POST['pass'];
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
                        echo "<form name='miformulario' action='index.php' method='post'>
                            </form>";
                    } else if ($valor != $_SESSION['UsuarioIniciado'] || $valor != $_SESSION['ContraUsuario']){
                        echo "<form action='Login.php' method='post'> 
                            <link rel='icon' type='image/png' href='favicon.ico'>
                            <link rel='stylesheet' type='text/css' href='estilos_principales.css'>
                            <title>OnlyFilms</title>
                            <body class = 'bodyDatosIncorrecto'>
                            <h1>Usuario o contraseña incorrectos</h1><br>
                            <input type='submit' name='login' value='volver a login'><br>
                            </body>
                            </form>";
                    }
                }
                
            }
        }
    }
    if(isset($_POST['publicar'])) {
        $publicacion = $_POST['publicacion'];
        $sql = "INSERT INTO only_post (usuario, comentario, fecha) VALUES ('".$_SESSION['UsuarioIniciado']."', '". $publicacion ."', SYSDATE())";
        $MyBBDD->consulta($sql);
        unset($publicacion);
        echo "<form action='index.php' method='post'>
        <link rel='stylesheet' type='text/css' href='estilos_principales.css'>
        <link rel='icon' type='image/png' href='favicon.ico'>
        <title>OnlyFilms</title>
            <body class = 'bodyPost'>
            <h1>POST PUBLICADO CON ÉXITO</h1><br>
            <input type='submit' name='volver' value='Volver a la pagina principal'><br>
            </body>
        </form>";
    }
    if(isset($_POST['comentar'])) {
        $idPelicula = $_SESSION['idPelicula'];
        $publicacion = $_POST['publicacion'];
        $sql = "INSERT INTO only_post (usuario, comentario, id_peli) VALUES ('".$_SESSION['UsuarioIniciado']."', '". $publicacion ."','".$idPelicula."')";
        $MyBBDD->consulta($sql);
        unset($publicacion);
        echo "<form action='peliculas.php' method='post'> 
        <link rel='stylesheet' type='text/css' href='estilos_principales.css'>
        <link rel='icon' type='image/png' href='favicon.ico'>
        <title>OnlyFilms</title>
            <body class = 'bodyPost'>
            <h1>POST PUBLICADO CON ÉXITO</h1><br>
            <input type='submit' name='volver' value='Volver a la lista de peliculas'><br>
            </body>
        </form>";
    }
?>