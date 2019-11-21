
  
<?php
require_once "DAO/participanteDAO.php";


class ParticipanteController{
	public $participanteDAO;
	
	public function __construct(){
		$this->participanteDAO = new ParticipanteDAO();
	}
	
	function inserir($idade, $peso, $altura, $curso, $facilidade_logica, $frequencia_cardiaca){
		return $this->participanteDAO->inserir($idade, $peso, $altura, $curso, $facilidade_logica, $frequencia_cardiaca);
	}
	function listar(){
		return $this->participanteDAO->listar();
	}
	function pegarID(){
		return $this->participanteDAO->pegarID();
	}
}

