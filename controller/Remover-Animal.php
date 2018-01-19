<?php 
	include '../model/Conexao.php';
	include '../model/AnimalCrud.php';
	include "../controller/Mostrar-Alerta.php";

	$banco = new db();
	$conexao = $banco->conecta_mysql();
	$id = $_POST ['id'];
	removeAnimal($conexao, $id);
	$_SESSION['success'] = "Animal Removido!";
	header("Location:../view/Deleta-Animais.php");
	die();
 ?>