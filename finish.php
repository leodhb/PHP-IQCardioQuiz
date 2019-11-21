<?php  

include_once('componentes/header.php'); 


?>

<?php  

	if(isset($_GET['postar']))
	{
		require_once 'controller/resultadoController.php'; 
		$resultadoController    = new ResultadoController();

		$data = $resultadoController->pegarID();

		$aidx = $data['res_id'];
		$freq = $_POST['freq'];


		$resultadoController->pegarFreqFinal($freq, $aidx);
		header("Location: noice.php?freq=$freq&aidx=$aidx");
	}




		
	

?>



<div class="row ">
	<div class="col-md-3 bg"> </div>
	<div class="col-md-6 h-100 d-inline-block">
		<form class="form-horizontal" action="finish.php?postar=1" method="post">
				<fieldset>
					<input type="hidden" name="acao">
				<div class="form-group">
					<h1 class="titulo" style="padding-top: 170px">Foi massa bro? 

					<?php 


					if($_GET['acertos'] == '0'){
						echo 'Tu n acertou nenhuma bixo';
					}else if($_GET['acertos'] == '6'){
						echo 'Tu acertou tudo bixo. Mizeravi';

					}else if($_GET['acertos'] == '5'){
						echo 'Acertou 5, com sorte passa em medicina um dia';

					}else if($_GET['acertos'] == '4'){
						echo 'Tu acertou 4. Quanto é 4+4?';

					}else if($_GET['acertos'] == '3'){
						echo 'Tu acertou 3, como quer passar no ENEM assim?';

					}else if($_GET['acertos'] == '2'){
						echo 'Acertasse duas, mais uma e ficava na media';

					}else if($_GET['acertos'] == '1'){
						echo 'Tu acertou uma, Einstein';

					}  ?>
						

					</h1>
					<h2 style="font-size: 12px; margin-left: 15px;">Fala pra gente teus batimentos cardíacos depois do teste!</h2>	


				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="freq">Frequência Cardíaca</label>  
				  <div class="col-md-12">
				  <input id="freq" name="freq" type="text" placeholder="Frequência Cardíaca" class="form-control input-md" required="">
				    
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-md-12">
				  <button type="submit" class="btn btn-success  btn-lg btn-block" style="margin-bottom: 700px">Enviar</button>
				    
				  </div>
				</div>
				</fieldset>
				</form>
	</div>
	<div class="col-md-3 bg"> </div>
</div>

<?php  include_once('componentes/footer.php'); ?>