<?php
class MembroModel{
    private $id;
    private $foto;
    private $email;
    private $senha;
	private $apresentacao;
    private $aniversario;
    private $telefone;
    private $melhorViagem;
    private $genero;
    private $estilo;
    private $diariosViagem = [];
    private $eventos = [];
    private $paginasDestino = [];
    private $contribuicoes = [];
    private $desafios = [];


    public function __construct($id,$foto,$email,$senha){
        $this->id = $id;
        $this->foto = $foto;
        $this->email = $email;
        $this->senha = $senha;
    }
    




	   //Métodos Getters and Setters
   
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getFoto() {
		return $this->foto;
	}

	public function setFoto($foto) {
		$this->foto = $foto;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	public function getApresentacao() {
		return $this->apresentacao;
	}

	public function setApresentacao($apresentacao) {
		$this->apresentacao = $apresentacao;
	}

	public function getAniversario() {
		return $this->aniversario;
	}

	public function setAniversario($aniversario) {
		$this->aniversario = $aniversario;
	}

	public function getTelefone() {
		return $this->telefone;
	}

	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}

	public function getMelhorViagem() {
		return $this->melhorViagem;
	}

	public function setMelhorViagem($melhorViagem) {
		$this->melhorViagem = $melhorViagem;
	}

	public function getGenero() {
		return $this->genero;
	}

	public function setGenero($genero) {
		$this->genero = $genero;
	}

	public function getEstilo() {
		return $this->estilo;
	}

	public function setEstilo($estilo) {
		$this->estilo = $estilo;
	}

	public function getDiariosViagem() {
		return $this->diariosViagem;
	}

	public function setDiariosViagem($diariosViagem) {
		$this->diariosViagem = $diariosViagem;
	}

	public function getEventos() {
		return $this->eventos;
	}

	public function setEventos($eventos) {
		$this->eventos = $eventos;
	}

	public function getPaginasDestino() {
		return $this->paginasDestino;
	}

	public function setPaginasDestino($paginasDestino) {
		$this->paginasDestino = $paginasDestino;
	}

	public function getContribuicoes() {
		return $this->contribuicoes;
	}

	public function setContribuicoes($contribuicoes) {
		$this->contribuicoes = $contribuicoes;
	}

	public function getDesafios() {
		return $this->desafios;
	}

	public function setDesafios($desafios) {
		$this->desafios = $desafios;
	}
 
	

}

?>