<?php 
		include "../model/Conexao.php";
		include "../model/AnimalCrud.php";
		include "../controller/Mostrar-Alerta.php";

		$banco = new db();

		$conexao = $banco->conecta_mysql();

		//recebendo valores do formulario 
		$nome = $_POST ['nome'];
		$raca = $_POST ['raca'];
		$peso = $_POST ['peso'];
		$retorno = explode(",", $peso);
		$pesoNovo = implode(".", $retorno);

			if (insereAnimal($conexao, $nome, $raca,$pesoNovo)) {
				$_SESSION['success'] = "Animal Cadastrado!";
				header("Location:../view/Formulario-Animal.php");
			}else{
				$msg = mysqli_error($conexao);
				$_SESSION['warning'] = "Não foi possivel cadastrar o animal!";
				header("Location:../view/Formulario-Animal.php");
			}

 ?>