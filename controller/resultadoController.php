  
<?php
require_once "DAO/resultadoDAO.php";


class ResultadoController{
	public $resultadoDAO;
	
	public function __construct(){
		$this->resultadoDAO = new ResultadoDAO();
	}
	
	function inserir($part_id, $frequencia_cardiaca, $acertos, $tempo){
		return $this->resultadoDAO->inserir($part_id, $frequencia_cardiaca, $acertos, $tempo);
	}
	function listar(){
		return $this->resultadoDAO->listar();
	}

	function pegarFreqFinal($freq, $id)
	{
		return $this->resultadoDAO->pegarFreqFinal($freq, $id);
	}

	function pegarID(){
		return $this->resultadoDAO->pegarID();
	}

}



