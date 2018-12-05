<?php
	include_once("../clases/Hotel.php");
	class ConsultaPerfil
	{
		public function retornarPerfil()
		{
			$modelo = new Hotel();
			$respuesta = $modelo->consultarPerfil();
			return $respuesta;
		}
	}
	$obj = new ConsultaPerfil();
	$obj->retornarPerfil();
	
?>