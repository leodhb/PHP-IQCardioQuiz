<?php  

include_once('componentes/header.php'); 


?>

<?php  
	if(isset($_GET['postar']))
	{
		require_once 'controller/participanteController.php'; 
		$participanteController = new ParticipanteController();

		$idade  = $_POST['idade'];
		$peso   = $_POST['peso'];
		$altura = $_POST['altura'];
		$curso  = $_POST['curso'];
		$logica = $_POST['logica'];
		$freq   = $_POST['freq'];

		$participanteController->inserir($idade, $peso, $altura, $curso, $logica, $freq);
		header("Location: quiz.php");
	}

?>


<div class="row">

	<div class="col-md-3 bg"> </div>
	<div class="col-md-6">
		<form class="form-horizontal" action="index.php?postar=1" method="post">
				<fieldset>

				<div class="form-group"  style="margin-top: 30px;">
					<h1 class="titulo">Preencha o formulário antes de continuar</h1>				 
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="idade">Idade</label>  
				  <div class="col-md-12">
				  <input id="idade" name="idade" type="text" placeholder="Idade" class="form-control input-md" required="">
				    
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="peso">Peso</label>  
				  <div class="col-md-12">
				  <input id="peso" name="peso" type="text" placeholder="Peso" class="form-control input-md" required="">
				    
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="altura">Altura</label>  
				  <div class="col-md-12">
				  <input id="altura" name="altura" type="text" placeholder="Altura" class="form-control input-md" required="">
				    
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="curso">Curso</label>
				  <div class="col-md-12">
				    <select id="curso" name="curso" class="form-control">
				      <option value="Informática">Informática</option>
				      <option value="Eletroeletrônica">Eletroeletrônica</option>
				    </select>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-md-12 control-label" for="logica">Nível de facilidade com questões de lógica</label>
				  <div class="col-md-12">
				    <select id="logica" name="logica" class="form-control">
				      <option value="Baixo">Baixo</option>
				      <option value="Médio">Médio</option>
				      <option value="Alto">Alto</option>
				    </select>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="freq">Frequência Cardíaca</label>  
				  <div class="col-md-12">
				  <input id="freq" name="freq" type="text" placeholder="Frequência Cardíaca" class="form-control input-md" required="">
				    
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-md-12">
				  <button type="submit" class="btn btn-success  btn-lg btn-block mb-5">Jogar!</button>
				    
				  </div>
				</div>
				</fieldset>
				</form>
	</div>
	<div class="col-md-3 bg"> </div>
</div>

<?php  include_once('componentes/footer.php'); ?>