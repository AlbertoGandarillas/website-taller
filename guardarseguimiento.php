<?php
    session_start();
    //require 'conexion.php';
    require_once 'clases.php';

    $RPTRegistrar = new Logica();
    $CantidadRegistros=0;
    $DNI=$_POST["DNI"];
    $PLACA=$_POST["PLACA"];
    $IMG_RUTA1='NULL';
    $IMG_NOMBRE1=$_POST["IMG_NOMBRE1"];
    $IMG_DESCRIPCION1=$_POST["IMG_DESCRIPCION1"];
    $IMG_RUTA2='NULL';
    $IMG_NOMBRE2=$_POST["IMG_NOMBRE2"];
    $IMG_DESCRIPCION2=$_POST["IMG_DESCRIPCION2"];
    $IMG_RUTA3='NULL';
    $IMG_NOMBRE3=$_POST["IMG_NOMBRE3"];
    $IMG_DESCRIPCION3=$_POST["IMG_DESCRIPCION3"];


    if(isset($_FILES['IMG_RUTA1'])){

        $file= $_FILES['IMG_RUTA1'];
        //print_r($file);
        $fileName= $file['name'];
        $fileTmpName= $file['tmp_name'];
        $fileSize= $file['size'];
        $fileError= $file['error'];
        $fileType= $file['type'];

        $fileExt= explode('.',$fileName);
        $fileActualExt= strtolower(end($fileExt));
        //print($fileActualExt);
        $allowed= array('jpg','jpeg','png');
        $estadoCarga1=true;

        if (in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize < 5000000){
                    //$fileNameNew= uniqid('',true).".".$fileActualExt;
                    $fileNameNew=$fileName;
                    $fileDestination= 'uploads/'.$fileNameNew;
                    $IMG_RUTA1= "'".$fileDestination."'";
                    //print($fileDestination);
                    move_uploaded_file($fileTmpName,$fileDestination);
                }else{
                    echo "Tu Archivo sobre pasa el limite de 5Mb";
                    $Error=1;
                    $estadoCarga1=false;
                }
            }else{
                echo "¡Hubo un error al cargar su archivo!";
                $Error=2;
                $estadoCarga1=false;
            }
        }else{
            echo "¡No puede cargar un archivo de este tipo! ";
            $Error=3;
            $estadoCarga1=false;
        }
    }

    if(isset($_FILES['IMG_RUTA2'])){

        $file= $_FILES['IMG_RUTA2'];
        //print_r($file);
        $fileName= $file['name'];
        $fileTmpName= $file['tmp_name'];
        $fileSize= $file['size'];
        $fileError= $file['error'];
        $fileType= $file['type'];

        $fileExt= explode('.',$fileName);
        $fileActualExt= strtolower(end($fileExt));
        //print($fileActualExt);
        $allowed= array('jpg','jpeg','png');
        $estadoCarga2=true;

        if (in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize < 5000000){
                    //$fileNameNew= uniqid('',true).".".$fileActualExt;
                    $fileNameNew=$fileName;
                    $fileDestination= 'uploads/'.$fileNameNew;
                    $IMG_RUTA2= "'".$fileDestination."'";
                    //print($fileDestination);
                    move_uploaded_file($fileTmpName,$fileDestination);
                }else{
                    echo "Tu Archivo sobre pasa el limite de 5Mb";
                    $Error=1;
                    $estadoCarga2=false;
                }
            }else{
                echo "¡Hubo un error al cargar su archivo!";
                $Error=2;
                $estadoCarga2=false;
            }
        }else{
            echo "¡No puede cargar un archivo de este tipo! ";
            $Error=3;
            $estadoCarga2=false;
        }
    }

    if(isset($_FILES['IMG_RUTA3'])){

        $file= $_FILES['IMG_RUTA3'];
        //print_r($file);
        $fileName= $file['name'];
        $fileTmpName= $file['tmp_name'];
        $fileSize= $file['size'];
        $fileError= $file['error'];
        $fileType= $file['type'];

        $fileExt= explode('.',$fileName);
        $fileActualExt= strtolower(end($fileExt));
        //print($fileActualExt);
        $allowed= array('jpg','jpeg','png');
        $estadoCarga3=true;

        if (in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize < 5000000){
                    //$fileNameNew= uniqid('',true).".".$fileActualExt;
                    $fileNameNew=$fileName;
                    $fileDestination= 'uploads/'.$fileNameNew;
                    $IMG_RUTA3= "'".$fileDestination."'";
                    //print($fileDestination);
                    move_uploaded_file($fileTmpName,$fileDestination);
                }else{
                    echo "Tu Archivo sobre pasa el limite de 5Mb";
                    $Error=1;
                    $estadoCarga3=false;
                }
            }else{
                echo "¡Hubo un error al cargar su archivo!";
                $Error=2;
                $estadoCarga3=false;
            }
        }else{
            echo "¡No puede cargar un archivo de este tipo! ";
            $Error=3;
            $estadoCarga3=false;
        }
    }

    if ($estadoCarga1==true && $estadoCarga2==true && $estadoCarga3==true ){
        $sql="insert into Archivos (	DNI,PLACA	,	IMG_RUTA1,IMG_NOMBRE1,IMG_DESCRIPCION1,IMG_RUTA2,IMG_NOMBRE2,IMG_DESCRIPCION2,IMG_RUTA3,IMG_NOMBRE3,IMG_DESCRIPCION3,	FECHA_CREACION	) values
        ('$DNI','$PLACA',$IMG_RUTA1,'$IMG_NOMBRE1','$IMG_DESCRIPCION1',$IMG_RUTA2,'$IMG_NOMBRE2','$IMG_DESCRIPCION2',$IMG_RUTA3,'$IMG_NOMBRE3','$IMG_DESCRIPCION3',NOW())";
        
        //print ($sql);
        $RQTRegistrarCabecera = $RPTRegistrar->Registrar_DevuelveID($sql);
        header('Location:../cargaseguimiento.php');
    }

    if ($estadoCarga==false){
        header('Location:../cargaseguimiento.php');
    } 



?>