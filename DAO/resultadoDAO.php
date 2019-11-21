<?php
require_once 'connection.php';


class ResultadoDAO {
	public $connection;
	
	public function __construct(){
		$this->connection = new Connection();
	}

	
	function inserir($part_id, $frequencia_cardiaca, $acertos, $tempo){
			$sql = "INSERT INTO resultado(part_id, res_frequencia_cardiaca, res_acertos, res_tempo) VALUES ('$part_id', '$frequencia_cardiaca', $acertos, '$tempo');";
			$result = $this->connection->link->query($sql);
			return $result;
	}



	function pegarFreqFinal($freq, $id)
	{
		$sql = "UPDATE resultado SET res_frequencia_cardiaca='$freq' WHERE res_id=$id";
		$result = $this->connection->link->query($sql);
		return $result;
	}

	function pegarID(){
		$sql = "SELECT * FROM resultado ORDER BY res_id DESC";
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



	function listar(){
		$sql = "SELECT * FROM `resultado` INNER JOIN participante ON resultado.part_id = participante.part_id";
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
		
}