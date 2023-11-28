<?php
class Membro {
    private $foto;
    private $nome;
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

    public function __construct(
        $foto,
        $nome,
        $email,
        $senha,
        $apresentacao,
        $aniversario,
        $telefone,
        $melhorViagem,
        $genero,
        $estilo
    ) {
        $this->foto = $foto;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->apresentacao = $apresentacao;
        $this->aniversario = $aniversario;
        $this->telefone = $telefone;
        $this->melhorViagem = $melhorViagem;
        $this->genero = $genero;
        $this->estilo = $estilo;
    }

    // Métodos Set
    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setApresentacao($apresentacao) {
        $this->apresentacao = $apresentacao;
    }

    public function setAniversario($aniversario) {
        $this->aniversario = $aniversario;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setMelhorViagem($melhorViagem) {
        $this->melhorViagem = $melhorViagem;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setEstilo($estilo) {
        $this->estilo = $estilo;
    }

    // Métodos Get
    public function getFoto() {
        return $this->foto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getApresentacao() {
        return $this->apresentacao;
    }

    public function getAniversario() {
        return $this->aniversario;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getMelhorViagem() {
        return $this->melhorViagem;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getEstilo() {
        return $this->estilo;
    }
}
?>
