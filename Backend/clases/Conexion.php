<?php
	class Conexion
	{
		var $Ruta;

		function __construct()
		{
			$this->Conectar();	
		}
		public function getRuta()
		{
			return($this->Ruta);	
		}

		function Conectar()
		{
			$this->Ruta=pg_connect("dbname=HotelParaiso user=AdminHotel password=hotelparaiso");

			if(!$this->Ruta)
				echo json_encode("Error");	
		}

		public function cerrarConexion()
		{
			pg_close($this->ruta);
		}
	}
?>