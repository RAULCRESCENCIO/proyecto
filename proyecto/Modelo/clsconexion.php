<?php

class clsconexion{

    private $servidor='localhost';
    private $Base='bdpanaderia';
    private $usuario='root';
    private $passw='';

    public $conectar=null;

    function __construct(){
        $this->conectar = new mysqli($this->servidor, $this->usuario, $this->passw, $this->Base, 3306);

        if (mysqli_connect_errno()) {
            printf("Imposible conectarse: %s\n", mysqli_connect_error());
            exit();
        }
    }
}

?>
