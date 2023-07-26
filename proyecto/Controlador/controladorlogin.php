<?php
session_start();
include_once 'Modelo/clsLogin.php';


class controladorlogin
{
	private $vista;
	
	
		public function ingresar()
		{	
			$vista="Vistas/Acceso/frmLogin.php";
			include_once("Vistas/frmplantillapublica.php");

   		}

		public function ingresar3()
		{	
			   $vista="Vistas/Acceso/frmLogin.php";
			   include_once("Vistas/frmplantillCli.php");
		}

		public function ingresar2()
		{	
			$vista="Vistas/Acceso/frmLogin.php";
			include_once("Vistas/frmplantilla.php");
   
		}

		public function registrar()
		{
			$login=new clsLogin();
			if(!empty($_POST))
			{
				$Nombre=$_POST['txtNombre'];
				$Apaterno=$_POST['txtApaterno'];
				$Amaterno=$_POST['txtAmaterno'];
				$Telefono=$_POST['txtTelefono'];
				$Idcalle=$_POST['txtCalle'];
				$idcolonia=$_POST['txtColonia'];
				$CorreoE=$_POST['txtCorreoE'];
				$usuario=$_POST['txtusuario'];
				$passw=$_POST['txtpassword'];
				$login->insertarCliente($Nombre,$Apaterno,$Amaterno,$Idcalle,$idcolonia,$usuario,$passw,$CorreoE,$Telefono);
				$vista="Vistas/Inicio/frmcontenidopublico.php";
				include_once("Vistas/frmplantillCli.php");
			}
			else
			{
				$consultacolonia=$login-> buscarcolonia();
				$vista="Vistas/Acceso/frmRegistrar.php";
				include_once("Vistas/frmplantillapublica.php");
			}
		}

		public function inicioPublico()
		{	
			$vista="Vistas/Inicio/frmcontenidopublico.php";
			include_once("Vistas/frmplantillapublica.php");
		}

		public function inicio()
		{	
			    if($_SESSION['TipoUsuario']=='Administrador')
				{
					$vista="Vistas/Inicio/frmcontenidopublico.php";
					include_once("Vistas/frmplantilla.php");
				}
				else if($_SESSION['TipoUsuario']=='Cliente')
				{
					$vista="Vistas/Inicio/frmcontenidopublico.php";
					include_once("Vistas/frmplantillCli.php");
				}
		}


   		public function Acceder(){
    	$login=new clsLogin();
    	if(!empty($_POST))
    	{
    		$usuario=$_POST['txtusuario'];
    		$passw=$_POST['txtpassword'];
    		$datos=$login->buscausuario($usuario,$passw);
			$usuario=$datos->fetch_object();
    		if($datos->num_rows>0)
    		{
				$_SESSION['TipoUsuario']= $usuario->Tipo;

				if($_SESSION['TipoUsuario']=='Administrador')
				{
					$vista="Vistas/Inicio/frmcontenidopublico.php";
					include_once("Vistas/frmplantilla.php");
				}
				else if($_SESSION['TipoUsuario']=='Cliente')
				{
					$vista="Vistas/Inicio/frmcontenidopublico.php";
					include_once("Vistas/frmplantillCli.php");
				}
    			
    		}
    		else
    		{
    				$vista="Vistas/Inicio/frmcontenidopublico.php";
					include_once("Vistas/frmplantillapublica.php");
    		}
		}
    	}

		public function CrearUsuario(){
			$login=new clsLogin();
		
			if(!empty($_POST))
			{
				$Nombre=$_POST['txtNombre'];
				$Apaterno=$_POST['txtApaterno'];
				$Amaterno=$_POST['txtAmaterno'];
				$Curp=$_POST['txtCurp'];
				$Telefono=$_POST['txtTelefono'];
				$Colonia=$_POST['txtColonia'];
				$Idcalle=$_POST['txtCalle'];
				$CorreoE=$_POST['txtCorreoE'];
				$selectTipoPuesto=$_POST['selectTipoPuesto'];
				$usuario=$_POST['txtusuario'];
				$passw=$_POST['txtpassword'];
				$selectTipoUsuario=$_POST['selectTipoUsuario'];
				$login->insertarEmpleado($Nombre,$Apaterno,$Amaterno,$Curp,$Telefono,$Idcalle,$Colonia,$selectTipoPuesto,$usuario,$passw,$selectTipoUsuario,$CorreoE);
				$consultaPuesto=$login-> ConsultaPuesto();
				$login=new clsLogin();
				$consultacolonia=$login-> buscarcolonia();
				$vista="Vistas/Administrador/frminsertarusuario.php";
				include_once("Vistas/frmplantilla.php");
			}
			else
			{
				$consultaPuesto=$login-> ConsultaPuesto();
				$login=new clsLogin();
				$consultacolonia=$login-> buscarcolonia();
				$vista="Vistas/Administrador/frminsertarusuario.php";
				include_once("Vistas/frmplantilla.php");
			}
    	
    	}

		public function ConsultaUsuario()
		{
			$login=new clsLogin();
	
			$Consulta=$login-> ConsultaUsuario();
			$vista="Vistas/Administrador/frmConsultaUsuario.php";
        	include_once("Vistas/frmplantilla.php");
		
		}

		public function ConsultaEmpleado2()
		{
			$login=new clsLogin();
			
			if(!empty($_POST))
			{
				if(isset($_POST['btnEliminar']))
				{
					$codigo=$_POST['txtCodigo'];
					$login=new clsLogin();
					$login->EliminarEmpleado($codigo);
					$ConsultaE=$login-> ConsultaInfoEmpleado();
					$vista="Vistas/Administrador/frmConsultaEmpleado.php";
					include_once("Vistas/frmplantilla.php");
				}
			}
			else
			{
					$login=new clsLogin();
					$ConsultaE=$login-> ConsultaInfoEmpleado();
					$vista="Vistas/Administrador/frmConsultaEmpleado.php";
					include_once("Vistas/frmplantilla.php");
			}
		}

		public function ConsultaCliente2()
		{
			$login=new clsLogin();
			$ConsultaC=$login-> ConsultaInfoClienet();
			$vista="Vistas/Administrador/frmConsultaCliente.php";
        	include_once("Vistas/frmplantilla.php");
		
		}

		public function cerrarsesion()
		{
				session_destroy();
				$vista="Vistas/Inicio/frmcontenidopublico.php";
				include_once("Vistas/frmplantillapublica.php");
		}

		public function AltaColonia()
		{
		$login=new clsLogin();

		if(!empty($_POST))
		{
			$Colonia=$_POST['txtColonia'];
			$login->AltaColonias($Colonia);
			$vista="Vistas/Administrador/frmColonias.php";
			include_once("Vistas/frmplantilla.php");
		}
		else{
			$vista="Vistas/Administrador/frmColonias.php";
			include_once("Vistas/frmplantilla.php");
		}

		}

 }

?>