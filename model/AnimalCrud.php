<?php 
	function insereAnimal($conexao, $nome, $raca, $peso)
		{
			$query = "insert into animais (nome,raca,peso) values ('{$nome}','{$raca}','{$peso}')";

			return mysqli_query($conexao, $query);
		}
		
		function removeAnimal($conexao, $id)
		{
			$query = "delete from animais where id = '{$id}'";

			return mysqli_query($conexao, $query);
		}

		function alterarAnimal($conexao, $id,$nome,$raca,$peso)
		{
			$query = "update animais set nome = '{$nome}', raca = '{$raca}', peso = '{$peso}' where id = {$id}";

			return mysqli_query($conexao, $query);
		}

		function listarAnimais($conexao)
		{
			$animais = array();	
			$resultado = mysqli_query($conexao, "select id, nome, raca, peso from animais");
			while ($animal = mysqli_fetch_assoc($resultado)) {
				array_push($animais, $animal);
			}

			return $animais;
		}
		function buscaAnimal($conexao, $id)
		{
			$query = "select * from animais where id = {$id}";
			$resultado = mysqli_query($conexao, $query);

			return mysqli_fetch_assoc($resultado);
		}
 ?>