<?php

include_once 'Modelo/clsCatalogo.php';

class controladorCatalogo
{
	private $vista;

	public function Filtrar2()
	{
        $productos=new clsCatalogo();
		$consultacategorias=$productos->ConsultaCategoria();
		$productos=new clsCatalogo();
        $Consultacatalogo=$productos->ConsultaProducto();
		$vista="Vistas/Productos/frmcatalogoproductos2.php";
        include_once("Vistas/frmplantillCli.php");
	}   
	public function Filtrar()
	{
        $productos=new clsCatalogo();
		$consultacategorias=$productos->ConsultaCategoria();
		$productos=new clsCatalogo();
        $Consultacatalogo=$productos->ConsultaProducto();
		$vista="Vistas/Productos/frmcatalogoproductos2.php";
		include_once("Vistas/frmplantillapublica.php");
	}
	public function ConsultaPanes()
	{
        $productos=new clsCatalogo();
		$ID=$_GET['IdCategoria'];
		$resultado= $productos->Consultacategoriaproducto($ID);
		$panes = [];
		if ($resultado->num_rows > 0) {
    		while ($row = $resultado->fetch_assoc()) {
        		$panes[] = $row;
    		}
		}
        
		echo json_encode($panes);
	}    
}
?>