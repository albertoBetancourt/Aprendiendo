<?php
	class Album
	{
		private $albID;
		private $albNombre;
		private $albDescripcion;
		
		public function construct($albNombre, $albDescripcion)
		{
			$this->albNombre = $albNombre;
			$this->albDescripcion = $albDescripcion;
        }
        
	}
?>