<?php

	require_once 'modelo.php';

	$url=$_SERVER['REQUEST_URI'];
	//var_dump($url);
	if($url=="/blog/index.php"){
		require "todo.php";

	}elseif($url=="/blog/detalle.php"){
		require "lista.php";
	}

	//require "vistas/lista.php";

?>
