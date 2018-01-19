<?php 
		include "../model/Conexao.php";
		include "../model/AnimalCrud.php";
		include "../controller/Mostrar-Alerta.php";

		$banco = new db();

		$conexao = $banco->conecta_mysql();

		$id = $_POST ['id'];
		$nome = $_POST ['nome'];
		$raca = $_POST ['raca'];
		$peso = $_POST ['peso'];
		$retorno = explode(",", $peso);
		$pesoNovo = implode(".", $retorno);

		if (alterarAnimal($conexao,$id,$nome,$raca,$peso)) {
			$_SESSION['success'] = "Animal Alterado!";
				header("Location:../view/Altera-Animal.php");
		}else{
				$msg = mysqli_error($conexao);
			$_SESSION['warning'] = "Não foi possivwel alterar o animal!";
				header("Location:../view/Altera-Animal.php");
		}
 ?>