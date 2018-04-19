<?php 
/**
* 
*/
class Gestion_Usuario
{
	private $usuario;
	private $pass;
	private $comparaPass;
	
	function __construct()
	{
		
	}

	public function getUsuario()
	{
		return $this->usuario;
	}
	public function setUsuario($usuario)
	{
		$this ->usuario=$usuario;
	}

	public function getPass()
	{
		return $this->pass;
	}
	public function setPass($pass)
	{
		$this->pass=$pass;
	}

	public function getComparaPass()
	{
		return $this->comparaPass;
	}
	public function setComparaPass($comparaPass)
	{
		$this->comparaPass=$comparaPass;
	}

}

 ?>