<?php
include_once 'Modelo/clsProductos.php';

class controladorproductos
{
	private $vista;
	
	public function insertarproductos()
	{
		$productos=new clsProductos();
		
		if(!empty($_POST))
		{
			$nombre=$_POST['txtNombre'];
			$tipoHarina=$_POST['txtTipoArina'];
			$precio=$_POST['txtprecio'];
			$cantidad=$_POST['txtcantidad'];
			$costo=$_POST['txtcosto'];
			$Detalles=$_POST['txtDetalles'];
			$Categoria=$_POST['txtcategoria'];
			$imagen=$_FILES['txtimagen'];
			$imagengenData=file_get_contents($imagen['tmp_name']);
			$imagengenData2=$productos->conectar->real_escape_string($imagengenData);
			$productos->insertarProductos($nombre,$tipoHarina,$precio,$cantidad,$costo,$Detalles,$Categoria,$imagengenData2);
			$categoriacon=$productos->ConsultaCategoria();
			$productos=new clsProductos();
			$nombrep=$productos->consultaNombreProducto();
			$productos=new clsProductos();
			$arinaP=$productos->consultaHarinaProducto();
			$vista="Vistas/Productos/frmproductos.php";
			include_once("Vistas/frmplantilla.php");
		}
		else
		{
			$categoriacon=$productos->ConsultaCategoria();
			$productos=new clsProductos();
			$nombrep=$productos->consultaNombreProducto();
			$productos=new clsProductos();
			$arinaP=$productos->consultaHarinaProducto();
			$vista="Vistas/Productos/frmproductos.php";
			include_once("Vistas/frmplantilla.php");
		}
		
	}

	public function ConsultaProducto()
	{
		$productos=new clsProductos();

		if(!empty($_POST))
		{

			if(isset($_POST['btnActualizar']))
			{
				$codigo=$_POST['txtcodigo'];
				$precio=$_POST['txtprecio'];
				$cantidad=$_POST['txtstock'];
				$costo=$_POST['txtcosto'];
				$Detalle=$_POST['txtdetalle'];
				$imagen=$_FILES['txtimagen'];
				$ban=0;
				$imagengenData2="";
				if(!empty($imagen['name'])) {
					$ban=1;
					$imagengenData=file_get_contents($imagen['tmp_name']);
					$imagengenData2=$productos->conectar->real_escape_string($imagengenData);
				}
				else{
					$ban=0;
				}
				$productos->ActualizarProducto($codigo,$precio,$cantidad,$costo,$Detalle,$imagengenData2,$ban);
				$productos=new clsProductos();
				$Consultaproductos=$productos->ConsultaProducto();
				$vista="Vistas/Administrador/frmConsultaProducto.php";
				include_once("Vistas/frmplantilla.php");
				
			}
			else if(isset($_POST['btnEliminar']))
			{
				$codigo=$_POST['txtcodigo'];
				$productos->EliminarProducto($codigo);
				$productos=new clsProductos();
				$Consultaproductos=$productos->ConsultaProducto();
				$vista="Vistas/Administrador/frmConsultaProducto.php";
				include_once("Vistas/frmplantilla.php");
			}
			
		}
		else{
		$productos=new clsProductos();
		$Consultaproductos=$productos->ConsultaProducto();
		$vista="Vistas/Administrador/frmConsultaProducto.php";
		include_once("Vistas/frmplantilla.php");
		}
	}


	public function AltasCategorias()
	{
		$productos=new clsProductos();

		if(!empty($_POST))
		{
			$Categoria=$_POST['txtCategoria'];
			$productos->AltaCategorias($Categoria);
			$vista="Vistas/Productos/frmCategorias.php";
			include_once("Vistas/frmplantilla.php");
		}
		else{
		$productos=new clsProductos();
		$vista="Vistas/Productos/frmCategorias.php";
		include_once("Vistas/frmplantilla.php");
		}
		
	}


}
?>