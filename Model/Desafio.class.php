<?php
class Desafio {
    private $titulo;
    private $descricao;
    private $paginaDestino;
    private $desafiosConcluidos;

    public function __construct(
        $titulo,
        $descricao,
        $paginaDestino,
        $desafiosConcluidos
    ) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->paginaDestino = $paginaDestino;
        $this->desafiosConcluidos = $desafiosConcluidos;
    }

    // Métodos Set
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setPaginaDestino($paginaDestino) {
        $this->paginaDestino = $paginaDestino;
    }

    public function setDesafiosConcluidos($desafiosConcluidos) {
        $this->desafiosConcluidos = $desafiosConcluidos;
    }

    // Métodos Get
    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPaginaDestino() {
        return $this->paginaDestino;
    }

    public function getDesafiosConcluidos() {
        return $this->desafiosConcluidos;
    }
}
?>
