<?php 

	/**
	* 
	*/
	class Proyecto
	{
		private $nombre;
		private $fechaInicio;
		private $fechaFin;
		private $encargado;
		private $gasto;
		private $estado;
		private $latitud;
		private $longitud;

		function __construct()
		{
			
		}

		public function getNombre()
		{
			return $this->nombre;
		}

		public function setNombre($nombre)
		{
			$this->nombre = $nombre;
		}


		public function getFechaInicio()
		{
			return $this->fechaInicio;
		}

		public function setFechaInicio($fechaInicio)
		{
			$this->fechaInicio = $fechaInicio;
		}


		public function getFechaFin()
		{
			return $this->fechaFin;
		}

		public function setFechaFin($fechaFin)
		{
			$this->fechaFin = $fechaFin;
		}


		public function getEncargado()
		{
			return $this->encargado;
		}

		public function setEncargado($encargado)
		{
			$this->encargado = $encargado;
		}


		public function getGasto()
		{
			return $this->gasto;
		}

		public function setGasto($gasto)
		{
			$this->gasto = $gasto;
		}


		public function getEstado()
		{
			return $this->estado;
		}

		public function setEstado($estado)
		{
			$this->estado = $estado;
		}


		public function getLatitud()
		{
			return $this->latitud;
		}

		public function setLatitud($latitud)
		{
			$this->latitud = $latitud;
		}
	}


 ?>