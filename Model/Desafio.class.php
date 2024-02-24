<?php
class Desafio
{
    private $titulo;
    private $descricao;
    private $guia;

    public function __construct(
        $titulo,
        $descricao,
        $guia
    ) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->guia = $guia;
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

    public function setGuia($guia)
    {
        $this->guia = $guia;
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

    public function getGuia()
    {
        return $this->guia;
    }
}
