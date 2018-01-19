<?php 
	session_start();
	function mostrarAlerta($tipo){
		if(isset($_SESSION[$tipo])){
 ?>
 		<p style="margin-top: 50px;" class="alert alert-<?= $tipo?>"><button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
          <span aria-hiden="true">&times;</span>
        </button><strong><?= $_SESSION[$tipo]?></strong></p>
<?php 
 			unset($_SESSION[$tipo]);
		}	
	}
 ?>