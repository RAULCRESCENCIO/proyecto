<?php
include_once 'Modelo/clsconexion.php';

class clsCatalogo extends clsconexion{
	
	public function consultaProducto() {
		$sql = "CALL Sp_ConsultaProducto();";
		$resultado = $this->conectar->query($sql);
		return $resultado;	   
	}	

	public function ConsultaCategoria() {
		$sql = "CALL Sp_Consultacategorias();";
		$resultado = $this->conectar->query($sql);
		return $resultado;	   
	}

	public function Consultacategoriaproducto($ID) {
		$sql = "CALL Sp_ConsultaCategoriasProducto($ID);";
		$resultado = $this->conectar->query($sql);
		return $resultado;	   
	}
	
}
?>
