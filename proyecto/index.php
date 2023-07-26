<?php
    define("controlador","Controlador/");

    /*condicion comun para verificar si se esta pasando a m por la url
    if(isset($_GET['C'])){
        $control=$_GET['C'];
    }else{
        $control='';
    }*/
    //lo mismo pero con operador ternario
    $control=isset($_GET['C'])?$_GET['C']:'';

    $ruta=controlador.$control.'.php';
    //app/controller/patito.php

    if(file_exists($ruta) && !empty($control)){
        require_once($ruta);
        $objeto=new $control();

        $metodo=isset($_GET['M'])?$_GET['M']:'';

        if(method_exists($objeto,$metodo) && !empty($metodo)){
            $objeto->$metodo();
        }
    }else{
      $vista="Vistas/Inicio/frmcontenidopublico.php";
      include_once('Vistas/frmplantillapublica.php');
    }
?>