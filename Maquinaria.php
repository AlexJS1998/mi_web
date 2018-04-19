<?php 

	/**
	* 
	*/
	class Maquinaria
	{
		private $nombre;
		private $precio;
		private $estado;
		private $marca;
		private $modelo;
		private $placa;
		private $descripcion;
		
		public function __construct()
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

		public function getPrecio()
		{
			return $this->precio;
		}

		public function setPrecio($precio)
		{
			$this->precio = $precio;
		}

		public function getEstado()
		{
			return $this->estado;
		}

		public function setEstado($estado)
		{
			$this->estado = $estado;
		}

		public function getMarca()
		{
			return $this->marca;
		}

		public function setMarca($marca)
		{
			$this->marca = $marca;
		}

		public function getModelo()
		{
			return $this->modelo;
		}

		public function setModelo($modelo)
		{
			$this->modelo = $modelo;
		}

		public function getPlaca()
		{
			return $this->placa;
		}

		public function setPlaca($placa)
		{
			$this->placa = $placa;
		}

		public function getDescripcion()
		{
			return $this->descripcion;
		}

		public function setDescripcion($descripcion)
		{
			$this->descripcion = $descripcion;
		}
	}

 ?>