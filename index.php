<html lang="pt">
	
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="author" content="Claudio Yuri">
		<title>SistemPet</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
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
					<a href="index.php" class="navbar-brand">SistemPet</a>
				</div>
				
				<div class="collapse navbar-collapse" id="barra-navegacao">
		           <ul class="nav navbar-nav navbar-right">
		             <li><a href="view/Formulario-Animal.php">Adicionar Animais</a></li>
		             <li><a href="view/Lista-Animais.php">Listar Animais</a></li>
		             <li><a href="view/Altera-Animal.php">Alterar Animais</a></li>
		             <li><a href="view/Deleta-Animais.php">Excluir Animais</a></li>
		           </ul>
		        </div>

			</div>
		</nav>
		<div class="container full-screen slide-pad">
			
		
		<section id="sliderhome" class="slide-pad">
            <div id="meuSlider" class="carousel slide full-screen" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#meuSlider" data-slide-to="0" class="active"></li>
                    
                </ol>
                <div class="carousel-inner">
                    <div class="item active"><img src="img/c1.jpg" alt="Slider 1" />
                    <div class="carousel-caption">
              			<h1 class="font">Bem Vindo!</h1>
 						<p class="objetivo">O objetivo desse projeto é resolver o desafio dado pela SimplesVet através do processo de seletivo para a vaga estágio PHP.</p>             
            		</div>
        		</div>
                 
                </div>
                <a class="left carousel-control" href="#meuSlider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#meuSlider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </section>
		</div>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script type="text/javascript">
    		$(document).ready(function(){
				$('body').css('display', 'none');
				$('body').fadeIn(3000);
				$('nav').css('display', 'none');
				$('nav').fadeIn(4000);
				$('h1').css('display', 'none');
				$('h1').fadeIn(5000);
				$('p').css('display', 'none');
				$('p').fadeIn(5500);
			});
    	</script>
    	<script src="bootstrap/js/bootstrap.js"></script>
    	<script src="jquery-3.2.1.js"></script>
	</body>
</html>