<?php

function abrir_db(){
	$enlace=new PDO("mysql:host=localhost;dbname=blogsh",'root');
	return $enlace;
}

function cerrar_db($enlace){
	$enlace=null;
}

function devolver_entradas(){
	$enlace = abrir_db();
	$resultado=$enlace->query("SELECT * FROM entradas");

	$entradas=array();
	while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
		$entradas[]=$fila;
	}
	cerrar_db($enlace);
	return $entradas;
}

function devolver_entrada_id($id){
	$enlace=abrir_db();

	$consulta= "SELECT titulo, descripcion FROM entradas WHERE id=:id;";
	$statm=$enlace->prepare($consulta);
	$statm->bindValue(':id',$id,PDO::PARAM_INT);
	$statm->execute();
	//var_dump($statm);
	$fila=$statm->fetch(PDO::FETCH_ASSOC);

	cerrar_db($enlace);

	return $fila;
}

?>