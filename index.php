 
<!DOCTYPE html>
<html>
	<head>
	<title> "Lista trabajadores"</title>
	</head>

	
	<body>
 		<?php

 	include("ListasSimple.php");

 	# Instanciar la lista
 	$ListaSimple = new ListaSimple();

 	#Agregar empleado
 	$e1 = new Nodo("123qwe", "Sasuke uchiha", "23", 3000);
 	$ListaSimple->AgregarNodoPrincipio($e1);

	#Agregar empleado
 	$e2 = new Nodo("456rty", "Itachi uchiha", "27", 3400);
 	$ListaSimple->AgregarNodoPrincipio($e2);

 	#Agregar empleado
 	$e3 = new Nodo("789uio", "Madara uchiha", "35", 7400);
 	$ListaSimple->AgregarNodoPrincipio($e3);

 	#Agregar empleado
 	$e4 = new Nodo("098pas", "Obito uchiha", "20", 2000);
 	$ListaSimple->AgregarNodoPrincipio($e4);

 	#Agregar empleado
 	$e5 = new Nodo("765dfg", "Shisui Uchiha", "27", 3400);
 	$ListaSimple->AgregarNodoPrincipio($e5);

  	#AVisualizar la lista
 	print "<br><hr>". $ListaSimple->VisualizarLista();

 	#reporte A "Hacer un método que nos permita determinar en la lista, cuantos trabajadores en la empresa ganan mas que el promedio." 

 	print "<br><hr>". $ListaSimple->ReporteA();

 	#Reporte B "La suma de los salarios de las personas que tenga la mayor y la menor edad."
 	
 	print "<br><hr>". $ListaSimple->ReporteB();

 		?>
 	</body>
</html>






