<?php
class Post {
    private $fotos;
    private $conteudo;
    private $diarioViagem;
    private $data;

    public function __construct($fotos, $conteudo, $diarioViagem, $data) {
        $this->fotos = $fotos;
        $this->conteudo = $conteudo;
        $this->diarioViagem = $diarioViagem;
        $this->data = $data;
    }

    // Métodos Set
    public function setFotos($fotos) {
        $this->fotos = $fotos;
    }

    public function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }

    public function setDiarioViagem($diarioViagem) {
        $this->diarioViagem = $diarioViagem;
    }

    public function setData($data) {
        $this->data = $data;
    }

    // Métodos Get
    public function getFotos() {
        return $this->fotos;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    public function getDiarioViagem() {
        return $this->diarioViagem;
    }

    public function getData() {
        return $this->data;
    }
}
?>
