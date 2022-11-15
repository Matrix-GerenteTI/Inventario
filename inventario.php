<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/inventario/Controllers/inventarios.php";
if(isset($_GET['closeSession'])){
	session_destroy();
	header('Location: http://servermatrixxxb.ddns.net:8181/inventario/views/login/index.php');
}else{
	$invController = new InventariosController();
	if($invController->checkSession())
		header('Location: http://servermatrixxxb.ddns.net:8181/inventario/views/inventario.php');
	else
		header('Location: http://servermatrixxxb.ddns.net:8181/inventario/views/login/index.php');
}