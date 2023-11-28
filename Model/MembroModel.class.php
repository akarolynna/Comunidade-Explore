<?php
class MembroModel{
    private $id;
    private $foto;
    private $email;
    private $senha;


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

}

?>