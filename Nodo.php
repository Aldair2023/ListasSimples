<?php

class Nodo {
	
	private $Codigo;
	private $Nombre;
	private $Edad;
	private $Salario;
	private $Sig;

	function __construct($Codigo, $Nombre, $Edad, $Salario){
		$this->Codigo = $Codigo;
		$this->Nombre = $Nombre;
		$this->Edad = $Edad;
		$this->Salario = $Salario;

	}

	function getCodigo(){
		return $this->Codigo;

	}

	function getNombre(){
		return $this->Nombre;
		
	}

	function getEdad(){
		return $this->Edad;
		
	}

	function getSalario(){
		return $this->Salario;
		
	}

	function getSig(){
		return $this->Sig;
		
	}

	function setCodigo($Codigo){
		$this->Codigo = $Codigo;

	}

	function setNombre($Nombre){
		$this->Nombre = $Nombre;
		
	}

	function setEdad($Edad){
		$this->Edad = $Edad;
		
	}

	function setSalario($Salario){
		$this->Salario = $Salario;
		
	}

	function setSig($Sig){
		$this->Sig = $Sig;
		
	}

	

}
