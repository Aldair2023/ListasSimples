<?php

include("Nodo.php");


class ListaSimple {

private $ptr;
private $t;

	
	function __construct()	{
		$this->ptr =null;
		$this->t =null;
	}

	function AgregarNodoPrincipio($temp){
		if ($this->ptr == null) {
			$this->t = $temp;
		}else{
			$temp->setSig($this->ptr);
		}
		$this->ptr = $temp;
						
	}

	function VisualizarLista(){
		$temp = $this->ptr;
		$Mensaje = "";

		if ($temp == null){
			return "La lista esta vacía";
		}else{
			while ($temp != null){
			$Mensaje = $Mensaje."<br> -Nombre:".$temp->getNombre(). " // Edad: " .$temp->getEdad(). " // Codigo: " .$temp->getCodigo(). " // Salario: ". $temp->getSalario();
			$temp = $temp->getSig();	
			}
			return "La lista de empleados es: $Mensaje";
		}

	}


	function AgregarNodoFinal($temp){

		if ($this->ptr == null) {
			$this->ptr = $temp;
		}else{
			$this->t->setSig($temp);
		}
		$this->t = $temp;
	}

	function NodoBuscar($c){
		$temp = $this->ptr;
		$Encontrado = false;
		while ($temp != null && !$Encontrado) {
			if ($temp->getCodigo() == $c) {
				$Encontrado = true;
			}else{
				$temp = $getSig();
			}
		}
		return $temp;
	}

	
	function ReporteA(){
		$temp = $this->ptr;
		$cont = 0;
		$suma = 0;
		$promedio = 1;
		$Mensaje = "";
		while($temp != null){
			$suma = $suma + $temp->getSalario();
			$cont++;
			$temp = $temp->getSig();

		}

		$promedio = ($suma / $cont);
		$temp = $this->ptr;
		$cont = 0;
		while ($temp != null) {
			if ($temp->getSalario() > $promedio) {
				$cont++;
				$Mensaje = $cont;
			}
			$temp = $temp->getSig();
		}

		return "La cantidad de trabajadores que ganas mas que el promedio($promedio) son: $Mensaje";
	}



	function ReporteB(){
		$temp = $this->ptr;
		
		$mayor = $temp->getEdad();
		$menor = $temp->getEdad();
		while($temp != null){
			if ($temp->getEdad() > $mayor) {
				$mayor = $temp->getEdad();
			}	
			else if ($temp->getEdad() < $menor) {
				$menor = $temp->getEdad();
			}
			$temp = $temp->getSig();
		} 
		$temp = $this->ptr;
		$acum = 0;
		while ($temp!=null){
			if ($temp->getEdad() == $mayor || $temp->getEdad() == $menor) {
				$acum =  $acum + $temp->getSalario() ;
			}
			$temp = $temp->getSig();
		}
	return "El trabajador(es) que tiene(n) la mayor edad es: $mayor, y el trabajador(es) que tiene(n) la menor edad es: $menor y la suma de sus salario es igual a: $acum";
	}

}
