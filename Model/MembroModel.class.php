<?php
class MembroModel
{
	private $id;
	private $foto;
	private $email;
	private $senha;
	private $apresentacao;
	private $aniversario;
	private $telefone;
	private $melhorViagem;
	private $instagram;
	private $genero;
	private $estilo;
	private $nome;
	private $diariosViagem = [];
	private $eventos = [];
	private $paginasDestino = [];
	private $contribuicoes = [];
	private $desafios = [];

	public function __construct($id, $foto, $nome, $email, $senha, $aniversario = null, $melhorViagem = null, $instagram = null, $telefone = null, $apresentacao = null)
	{
		$this->id = $id;
		$this->foto = $foto;
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
		$this->aniversario = $aniversario;
		$this->melhorViagem = $melhorViagem;
		$this->instagram = $instagram;
		$this->telefone = $telefone;
		$this->apresentacao = $apresentacao;
	}
	//Métodos Getters and Setters
	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getFoto()
	{
		return $this->foto;
	}

	public function setFoto($foto)
	{
		$this->foto = $foto;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function getApresentacao()
	{
		return $this->apresentacao;
	}

	public function setApresentacao($apresentacao)
	{
		$this->apresentacao = $apresentacao;
	}

	public function getAniversario()
	{
		return $this->aniversario;
	}

	public function setAniversario($aniversario)
	{
		$this->aniversario = $aniversario;
	}

	public function getTelefone()
	{
		return $this->telefone;
	}

	public function setTelefone($telefone)
	{
		$this->telefone = $telefone;
	}

	public function getMelhorViagem()
	{
		return $this->melhorViagem;
	}

	public function setMelhorViagem($melhorViagem)
	{
		$this->melhorViagem = $melhorViagem;
	}

	public function getGenero()
	{
		return $this->genero;
	}

	public function setGenero($genero)
	{
		$this->genero = $genero;
	}

	public function getEstilo()
	{
		return $this->estilo;
	}

	public function setEstilo($estilo)
	{
		$this->estilo = $estilo;
	}

	public function getDiariosViagem()
	{
		return $this->diariosViagem;
	}

	public function setDiariosViagem($diariosViagem)
	{
		$this->diariosViagem = $diariosViagem;
	}

	public function getEventos()
	{
		return $this->eventos;
	}

	public function setEventos($eventos)
	{
		$this->eventos = $eventos;
	}

	public function getPaginasDestino()
	{
		return $this->paginasDestino;
	}

	public function setPaginasDestino($paginasDestino)
	{
		$this->paginasDestino = $paginasDestino;
	}

	public function getContribuicoes()
	{
		return $this->contribuicoes;
	}

	public function setContribuicoes($contribuicoes)
	{
		$this->contribuicoes = $contribuicoes;
	}

	public function getDesafios()
	{
		return $this->desafios;
	}

	public function setDesafios($desafios)
	{
		$this->desafios = $desafios;
	}


	public function getInstagram()
	{
		return $this->instagram;
	}

	public function setInstagram($newInstagram)
	{
		$this->instagram = $newInstagram;
	}
	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($newNome)
	{
		$this->nome = $newNome;
	}
}
