<?php 
include_once '../model/Conexao.php';
include_once '../model/AnimalCrud.php';
include "../controller/Mostrar-Alerta.php";
mostrarAlerta("success");	
    mostrarAlerta("danger");	
    mostrarAlerta("info");
    mostrarAlerta("warning");
 ?>
<html lang="pt">
	
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="author" content="Claudio Yuri">
		<title>SistemPet</title>
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
		<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Comfortaa" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	</head>

	<body>
		
		<nav class="navbar navbar-blue navbar-fixed-top">
			<div class="container">
				<!-- botão Header/Branc-->
				<div class="navbar-header">
					<!-- botão toggle-->
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
			         
			          <p style="margin-top: 3px;">Menu</p></button>
					<a href="../index.php" class="navbar-brand">SistemPet</a>
				</div>
				
				<div class="collapse navbar-collapse" id="barra-navegacao">
		           <ul class="nav navbar-nav navbar-right">
		             <li><a href="Formulario-Animal.php">Adicionar Animais</a></li>
		             <li><a href="Lista-Animais.php">Listar Animais</a></li>
		             <li><a href="Altera-Animal.php">Alterar Animais</a></li>
		             <li><a href="Deleta-Animais.php">Excluir Animais</a></li>
		           </ul>
		        </div>

			</div>
		</nav>
		<div class="container" style="padding-top: 50px;">
			<div class="principal">
				<h1 class="page-header">Remover Cadastrado</h1>
				<table class="table  table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Raça</th>
							<th>Peso(kg)</th>
							<th class="alert-danger">Remover</th>
						</tr>
					</thead>
					<?php
						$banco = new db();
						$conexao = $banco->conecta_mysql();
						$animais = listarAnimais($conexao);
						krsort($animais);
						foreach ($animais as $animal) :
					?>
					<tr>
						<td><?=$animal ['nome']?></td>
						<td><?=$animal ['raca']?></td>
						<td><?=$animal ['peso']?></td>
						<td>
							<form class="centralizar" action="../controller/Remover-Animal.php" method="post">
								<input type="hidden" name="id" value="<?=$animal ['id']?>">
								<button class="btn btn-danger"><span  class="glyphicon glyphicon-trash"></button>
							</form>
						</td>
					</tr>
					<?php 
						endforeach
					 ?>
				</table>
			</div>
		</div>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script type="text/javascript">
    		$(document).ready(function(){
				$('body').css('display', 'none');
				$('body').fadeIn(1000);
				$('table').css('display', 'none');
				$('table').fadeIn(1200);
			});
    	</script>
    	<script src="../bootstrap/js/bootstrap.js"></script>
    	<script src="../jquery-3.2.1.js"></script>
	</body>
</html>