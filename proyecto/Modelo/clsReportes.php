<?php
include_once 'Modelo/clsconexion.php';

class clsReportes extends clsconexion{
	
	public function ConsultaDatosCliente($Usuario)
	{
		$sql = "CALL Sp_BuscarDatosClinte('$Usuario');";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	

}


?>
