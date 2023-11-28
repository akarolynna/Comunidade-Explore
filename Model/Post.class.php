<?php
class Post {
    private $fotos;
    private $titulo;
    private $conteudo;
    private $diarioViagem;

    public function __construct($fotos, $titulo, $conteudo, $diarioViagem) {
        $this->fotos = $fotos;
        $this->titulo = $titulo;
        $this->conteudo = $conteudo;
        $this->diarioViagem = $diarioViagem;
    }

    // Métodos Set
    public function setFotos($fotos) {
        $this->fotos = $fotos;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }

    public function setDiarioViagem($diarioViagem) {
        $this->diarioViagem = $diarioViagem;
    }

    // Métodos Get
    public function getFotos() {
        return $this->fotos;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    public function getDiarioViagem() {
        return $this->diarioViagem;
    }
}
?>
