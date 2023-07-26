<?php
include_once 'Modelo/clsconexion.php';

class clsProductos extends clsconexion{

    public function insertarProductos($nombre,$tipoHarina,$precio,$cantidad,$costo,$Detalles,$Categoria,$imagengenData2) {
		$sql = "CALL Sp_InsertarProductoInventario('$nombre','$tipoHarina','$precio','$cantidad','$costo','$Detalles','$Categoria','$imagengenData2');";
        $resultado = $this->conectar->query($sql);
		return $resultado;
	}
	
	public function ActualizarProducto($codigo,$precio,$cantidad,$costo,$Detalle,$imagengenData2,$ban)
	{
		$sql = "CALL Sp_ActualizarProducto('$codigo','$precio','$cantidad','$costo','$Detalle','$imagengenData2','$ban');";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}
	public function EliminarProducto($codigo)
	{
		$sql = "CALL Sp_EliminarProducto($codigo);";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}
	public function consultaProducto() {
		$sql = "CALL Sp_ConsultaProducto();";
		$resultado = $this->conectar->query($sql);
		return $resultado;	   
	}	

	public function consultaNombreProducto() {
		$sql = "CALL Sp_Consulta_nombreProducto();";
		$resultado = $this->conectar->query($sql);
		return $resultado;	   
	}
	public function consultaHarinaProducto() {
		$sql = "CALL Sp_Consulta_harinaProducto();";
		$resultado = $this->conectar->query($sql);
		return $resultado;	   
	}
	public function ConsultaCategoria() {
		$sql = "CALL Sp_Consultacategorias();";
		$resultado = $this->conectar->query($sql);
		return $resultado;	   
	}
	public function AltaCategorias($Categoria)
	{
		$sql = "CALL Sp_AltaCategorias('$Categoria');";
		$resultado = $this->conectar->query($sql);
		return $resultado;
	}
}
?>
