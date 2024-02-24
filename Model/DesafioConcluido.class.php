<?php
class DesafioConcluido
{
    private $titulo;
    private $descricao;
    private $foto;
    private $desafio;
    private $criador;

    public function __construct(
        $titulo,
        $descricao,
        $foto,
        $desafio,
        $criador
    ) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->foto = $foto;
        $this->desafio = $desafio;
        $this->criador = $criador;
    }

    // Métodos Set
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function setDesafio($desafio)
    {
        $this->desafio = $desafio;
    }

    public function setCriador($criador)
    {
        $this->criador = $criador;
    }

    // Métodos Get
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getDesafio()
    {
        return $this->desafio;
    }

    public function getCriador()
    {
        return $this->criador;
    }
}
