<?php
class Post
{
    private $fotos;
    private $titulo;
    private $descricao;
    private $diarioViagem;


    public function __construct($fotos, $titulo, $descricao, $diarioViagem)
    {
        $this->fotos = $fotos;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->diarioViagem = $diarioViagem;
    }

    //Métodos Getters and Setters
    public function getFotos()
    {
        return $this->fotos;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getDiarioViagem()
    {
        return $this->diarioViagem;
    }

    public function setFotos($fotos)
    {
        $this->fotos = $fotos;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setDiarioViagem($diarioViagem)
    {
        $this->diarioViagem = $diarioViagem;
    }
}
