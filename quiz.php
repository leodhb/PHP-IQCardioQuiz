<?php  

include_once('componentes/header.php'); 


?>

<?php  
	if(isset($_GET['postar']))
	{
		require_once 'controller/participanteController.php'; 
		require_once 'controller/resultadoController.php'; 
		$participanteController = new ParticipanteController();
		$resultadoController    = new ResultadoController();

		$count = 0;


		$op1 = @$_POST['options1'];
		$op2 = @$_POST['options2'];
		$op3 = @$_POST['options3'];
		$op4 = @$_POST['options4'];
		$op5 = @$_POST['options5'];
		$op6 = @$_POST['options6'];

		if($op1 == '4') { $count++; } 
		if($op2 == '4') { $count++; } 
		if($op3 == '4') { $count++; } 
		if($op4 == '1') { $count++; }
		if($op5 == '4') { $count++; } 
		if($op6 == '2') { $count++; }

		$stime = $_POST['time'];
		$endtime = microtime(true);
		$tempo = $endtime - $stime;

		$aidi =  $participanteController->pegarID();
		$idx  = $aidi['part_id'];
		$resultadoController->inserir($idx, '0', $count, $tempo);
		header("Location: finish.php?acertos=$count");

	}

?>


<div class="row">

	<div class="col-md-3 bg"> </div>
	<div class="col-md-6">
		<h1 class="titulo" style="margin-top: 30px;">VALENDO!!!</h1>

			<?php  
				$starttime = microtime(true);
			?>

		<form action="quiz.php?postar=1" method="post">


			<hr>
			<img src="img/dado.webp" class="rounded mx-auto d-block border border-primary" style="width: 100%;">
			<legend>Qual dos cubos abaixo poderia ser a rotação do cubo acima?</legend>
			<input type="hidden" name="time" value="<?php echo $starttime;?>">


			<div class="btn-group btn-group-toggle btn-lg btn-block" data-toggle="buttons" style="margin-bottom: 50px;">
				  <label class="btn btn-secondary active">
				    <input type="radio" name="options1" id="a1" autocomplete="off" value="1">  <img src="img/op1.webp" width="100px" height="100px">
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options1" id="a2" autocomplete="off" value="2"> <img src="img/op2.webp" width="100px" height="100px">
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options1" id="a3" autocomplete="off" value="3">  <img src="img/op3.webp" width="100px" height="100px">
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options1" id="a4" autocomplete="off" value="4">  <img src="img/op4.webp" width="100px" height="100px">
				  </label>
			</div>
			<hr>
			<legend>Se o dia depois de amanhã é dois dias antes da quinta-feira, que dia é hoje?</legend>
			<div class="btn-group btn-group-toggle btn-lg btn-block" data-toggle="buttons" style="margin-bottom: 50px;">

				  <label class="btn btn-secondary active">
				    <input type="radio" name="options2" id="b1" autocomplete="off" value="1">Quarta
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options2" id="b2" autocomplete="off" value="2">Segunda
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options2" id="b3" autocomplete="off" value="3">Terça
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options2" id="b4" autocomplete="off" value="4">Domingo
				  </label>
			</div>
			<hr>


			<legend>Marque a palavra que não combina com as outras</legend>
			<div class="btn-group btn-group-toggle btn-lg btn-block" data-toggle="buttons" style="margin-bottom: 50px;">
				  <label class="btn btn-secondary active">
				    <input type="radio" name="options3" id="c1" autocomplete="off" value="1">Cuiabá
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options3" id="c2" autocomplete="off" value="2">Cairo
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options3" id="c3" autocomplete="off" value="3">Buenos Aires
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options3" id="c4" autocomplete="off" value="4">Campinas
				  </label>
			</div>
			<hr>

			<legend>4-7-11-18-29... Qual é o próximo número nessa sequência? </legend>
			<div class="btn-group btn-group-toggle btn-lg btn-block" data-toggle="buttons" style="margin-bottom: 50px;">
				  <label class="btn btn-secondary active">
				    <input type="radio" name="options4" id="d1" autocomplete="off" value="1">47
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options4" id="d2" autocomplete="off" value="2">46
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options4" id="d3" autocomplete="off" value="3">55
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options4" id="d4" autocomplete="off" value="4">40
				  </label>
			</div>
			<hr>

			<legend>Fernanda gosta do número 96, mas não do 45. Ela também gosta do número 540, mas não do 250. De qual número abaixo ela gosta?</legend>
			<div class="btn-group btn-group-toggle btn-lg btn-block" data-toggle="buttons" style="margin-bottom: 50px;">
				  <label class="btn btn-secondary active">
				    <input type="radio" name="options5" id="e1" autocomplete="off" value="1">128
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options5" id="e2" autocomplete="off" value="2">140
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options5" id="e3" autocomplete="off" value="3">93
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options5" id="e4" autocomplete="off" value="4">132
				  </label>
			</div>
			<hr>


			<legend>C, F, I, L, O... Nesta sequência, qual é a próxima letra?</legend>
			<div class="btn-group btn-group-toggle btn-lg btn-block" data-toggle="buttons" style="margin-bottom: 50px;">
				  <label class="btn btn-secondary active">
				    <input type="radio" name="options6" id="f1" autocomplete="off" value="1">T
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options6" id="f2" autocomplete="off" value="2">R
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options6" id="f3" autocomplete="off" value="3">W
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="options6" id="f4" autocomplete="off" value="4">Q
				  </label>
			</div>

			<div class="field">
			  <div class="control">
			    <button type="submit" class="button is-link  btn-lg btn-block mb-5">Enviar</button>
			  </div>
			</div>
		</form>
	</div>

<div class="col-md-3 bg"> </div>
<?php  include_once('componentes/footer.php'); ?>