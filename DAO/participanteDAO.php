<?php
require_once 'connection.php';


class ParticipanteDAO {
	public $connection;
	
	public function __construct(){
		$this->connection = new Connection();
	}


	function inserir($idade, $peso, $altura, $curso, $facilidade_logica, $frequencia_cardiaca){
			$sql = "INSERT INTO participante(part_idade, part_peso, part_altura, part_curso, part_facilidade_logica, part_frequencia_cardiaca) VALUES ('$idade', '$peso', '$altura', '$curso', '$facilidade_logica', '$frequencia_cardiaca');";
			$result = $this->connection->link->query($sql);
			return $result;
	}
	

	
	function listar(){
		$sql = "SELECT * FROM participante";
		$result = $this->connection->link->query($sql);
		while($row = $result->fetch_array()){
			$rows[] = $row;
		}
		if(!empty($rows))
		{
			return $rows;
		}
		else
		{
			return 0;
		}
		
		}

		function pegarID(){
		$sql = "SELECT part_id FROM participante ORDER BY part_id DESC";
		$result = $this->connection->link->query($sql);
		$row = $result->fetch_assoc();

		if(!empty($row))
		{
			return $row;
		}
		else
		{
			return 0;
		}
		
	}


		
}