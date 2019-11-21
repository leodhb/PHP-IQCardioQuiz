<?php  

include_once('componentes/header.php'); 


require_once 'controller/resultadoController.php'; 
$resultadoController    = new ResultadoController();

$posts = $resultadoController->listar();
$count = 0;
?>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h1 class="text-center mt-5">Resultados</h1>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Idade</th>
		      <th scope="col">Altura</th>
		      <th scope="col">Peso</th>
		      <th scope="col">Curso</th>
		      <th scope="col">Facilidade com lógica</th>
		      <th scope="col">Freq. Card. Inicial</th>
		      <th scope="col">Freq. Card. Final</th>
		      <th scope="col">Qtde. Acertos</th>
		      <th scope="col">Qtde. Tempo</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php  	foreach ($posts as $data){  $count++; ?>
		    <tr>
		      <th scope="row"><?= $count?></th>
		      <td><?= $data['part_idade']?></td>
		      <td><?= $data['part_altura']?></td>
		      <td><?= $data['part_peso']?></td>
		      <td><?= $data['part_curso']?></td>
		      <td><?= $data['part_facilidade_logica']?></td>
		      <td><?= $data['part_frequencia_cardiaca']?></td>
		      <td><?= $data['res_frequencia_cardiaca']?></td>
		      <td><?= $data['res_acertos']?></td>
		      <td><?= $data['res_tempo']?></td>
		    </tr>
		   <?php } ?>
		  </tbody>
		</table>
	</div>

</div>


<?php  

include_once('componentes/footer.php'); 

?>