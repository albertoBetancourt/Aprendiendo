<?php
	include_once("../clases/Hotel.php");
	class ConsultaPerfil
	{
		public function retornarPerfil()
		{
			$modelo = new Hotel();
			$respuesta = $modelo->consultarPerfil();
			echo json_encode($respuesta);
		}
	}
	$obj = new ConsultaPerfil();
	$obj->retornarPerfil();
	
?>