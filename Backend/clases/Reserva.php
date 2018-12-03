<?php
    class Reserva
	{
		private $rsvID;
		private $rsvFechaReserva;
		private $rsvHoraReserva;
		private $rsvFechaEntrada;
		private $rsvNumeroNoches;
		private $rsvFechaCancelacion;
		private $rsvHoraCancelacion;
		private $conect;
		private $tarifas;
        
        public function __construct($rsvFechaReserva, $rsvHoraReserva, $rsvFechaEntrada, $rsvNumeroNoches)
		{
			$this->rsvFechaReserva = $rsvFechaReserva;
			$this->rsvHoraReserva = $rsvHoraReserva;
			$this->rsvFechaEntrada = $rsvFechaEntrada;
			$this->rsvNumeroNoches = $rsvNumeroNoches;
		}

    }
?>