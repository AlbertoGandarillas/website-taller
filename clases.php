<?php

class conexion{
    public static function conectar(){
        /* CONFIGURACION DEL SERVIDOR */
        $servidor='173.236.53.106';
        $usuario='tecnolog_Admin';
        $password='-+ZM;NO=T0A8';
        $basedatos='tecnolog_Taller';

        $conexion=mysqli_connect($servidor,$usuario,$password);
        mysqli_query($conexion,"SET NAMES 'utf8'");
        mysqli_select_db($conexion,$basedatos);
        return $conexion; 
    } 
}

class Logica{
    /* LISTAMOS LAS IMAGENES GUARDADAS EN EL SERVIDOR */
    public function Listar_Imagenes($DNI,$PLACA){
        $objListaOpciones = array();
        $sql="SELECT * FROM Archivos WHERE DNI='".$DNI."' AND PLACA='".$PLACA."';";
        // print ($sql);
        $resultado=mysqli_query(conexion::conectar(),$sql);
             while($reg=mysqli_fetch_assoc($resultado)){
                $objListaOpciones[]=$reg;
            }
            return $objListaOpciones; 
    }

    /* REGISTRAR DATOS Y DEVUELVE ID */
    public function Registrar_DevuelveID($sql){
        
        $conexion=conexion::conectar();
        //print ($sql);
        $resultado=mysqli_query($conexion,$sql);
        $this->objIdRegistroPaciente = mysqli_insert_id($conexion);
        return $this->objIdRegistroPaciente;
    }

    /* REGISTRAR */
    public function Registrar($sql){
         $resultado=mysqli_query(conexion::conectar(),$sql);
    }

    public function Logeo($DNI,$PLACA){
        //$md5Password= sistema_seguimiento::encryptIt($Password);
        //print($md5Password);
        if ($DNI=="admin"){
            header('Location:cargaseguimiento.php');
            exit;
        }

        $sql="SELECT * FROM Archivos where DNI='$DNI' and PLACA='$PLACA'";
        //print($sql);
        $resultado=mysqli_query(conexion::conectar(),$sql);
        if (mysqli_num_rows($resultado)==0){
            /* echo"<script type='text/javascript'>
            window.location='login.php?msg=1'
            </script>"; */
            header('Location:login.php');
        }else{
            if($registros=mysqli_fetch_array($resultado)){
              
                session_start();
                $_SESSION["DNI"] = $registros["DNI"];
                $_SESSION["PLACA"] = $registros["PLACA"];

                if ($registros["DNI"]=="admin"){
                    header('Location:cargaseguimiento.php');
                }

                //print($_SESSION["INT_ID_USUARIOS"] .'-'. $_SESSION["USUARIO"]);
               /*  echo"<script type='text/javascript'>
                window.location='paciente.php'
                </script>"; */
                header('Location:revision.php');
            }
        }
   }

     
    public function encryptIt($q) {
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
        return( $qEncoded );
    }
    
    public function decryptIt($q) {
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
        return( $qDecoded );
    }

}

?>