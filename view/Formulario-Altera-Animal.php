<?php 
	include '../model/Conexao.php';
	include '../model/AnimalCrud.php';

	$banco = new db();
	$conexao = $banco->conecta_mysql();
	$id = $_GET['id'];
	$animal = buscaAnimal($conexao, $id);
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
				<h1 class="page-header">Altera o Animal</h1>
				<div class="row form-produto" >
						<form  class="form-horizontal" name="produto" method="post" action="../controller/Alterar-Animal.php">
							<input type="hidden" name="id" value="<?=$animal['id']?>">
							<div class="form-group">
								<label class="col-sm-1"></label>
							    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
							   <div class="col-sm-6">
							      <input type="text" class="form-control" name="nome" id="inputEmail3" autofocus="autofocus" placeholder="Nome do Animal" value="<?=$animal['nome']?>">
							    </div>
							  </div>
							  <div class="form-group">
							  	<label class="col-sm-1"></label>
							    <label for="inputPassword3" class="col-sm-2 control-label">Raça</label>
							    <div class="col-sm-6">
							      <input type="text" class="form-control" id="inputPassword3" placeholder="Raça do Animal" name="raca" value="<?=$animal['raca']?>">
							    </div>
							  </div>
							  <div class="form-group">
							  	<label class="col-sm-1"></label>
							    <label for="inputPassword3" class="col-sm-2 control-label">Peso</label>
							    <div class="col-sm-6">
							      <input type="text" class="form-control" id="inputPassword3" placeholder="Peso do Animal" name="peso" value="<?=$animal['peso']?>">
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-sm-offset-4 col-sm-8">
							      <button type="submit" class="btn btn-info">Alterar</button>
							    </div>
							  </div>
						</form>	
					</div>
					<div class="col-md-4"></div>
				</div>
				
			</div>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script type="text/javascript">
    		$(document).ready(function(){
				$('body').css('display', 'none');
				$('body').fadeIn(1000);
			});
    	</script>
    	<script src="../bootstrap/js/bootstrap.js"></script>
    	<script src="../jquery-3.2.1.js"></script>
	</body>
</html>