<?php

require_once "config/database.php";
require_once "controllers/Vehiculos.php";

$controlador = new VehiculosController();
if (isset($_GET['action'])) {
	$accion = $_GET['action'];
	if (isset($_GET['id'])) {
		$controlador->$accion($_GET['id']);
	} else {
		$controlador->$accion();
	}
} else {
	$controlador = new VehiculosController();
	$controlador->index();
}
