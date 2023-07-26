<?php
include_once 'Modelo/clsconexion.php';

class clsLogin extends clsconexion{

	public function insertarCliente($Nombre,$Apaterno,$Amaterno,$Idcalle,$idcolonia,$usuario,$passw,$CorreoE,$Telefono)
	{
		$sql = "CALL Sp_RegistrarCliente('$Nombre','$Apaterno','$Amaterno','$Idcalle','$idcolonia','$usuario','$passw','$CorreoE','$Telefono');";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}

	public function insertarEmpleado($Nombre,$Apaterno,$Amaterno,$Curp,$Telefono,$Idcalle,$Colonia,$selectTipoPuesto,$usuario,$passw,$selectTipoUsuario,$CorreoE)
	{
		$sql = "CALL Sp_RegistrarEmpleado('$Nombre','$Apaterno','$Amaterno','$Curp','$Telefono','$Idcalle',$Colonia,$selectTipoPuesto,'$usuario','$passw','$selectTipoUsuario','$CorreoE');";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}


	public function buscausuario($usuario,$passw)
	{
		$sql = "CALL sp_consulta_usuario('$usuario','$passw');";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}

	public function ConsultaUsuario()
	{
		$sql = "CALL Sp_ConsultaUsuario();";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}

	public function ingresausuario($usuario,$passw,$Tipo)
	{
		$sql = "CALL sp_insertar_usuario('$usuario','$passw','$Tipo');";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}
	public function buscarmunicipio()
	{
		$sql = "CALL Sp_ConsultaMunicipio();";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}

	public function buscarcolonia()
	{
		$sql = "CALL Sp_ConsultaColonia();";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}

	public function ConsultaPuesto()
	{
		$sql = "CALL Sp_ConsultaPuesto();";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}

	public function ConsultaInfoEmpleado()
	{
		$sql = "CALL Sp_ConsultaInfoEmpleado();";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}

	public function ConsultaInfoClienet()
	{
		$sql = "CALL Sp_ConsultaInfoCliente();";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}
	public function AltaColonias($Colonia)
	{
		$sql = "CALL Sp_AltaColonias('$Colonia');";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}
	public function EliminarEmpleado($codigo)
	{
		$sql = "CALL Sp_EliminarEmpleado('$codigo');";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
	}
}
?>