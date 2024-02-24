<?php
class Contribuicao
{
    private $titulo;
    private $descricao;
    private $foto;
    private $paginaDestino;
    private $criador;
    private $arquivado;

    public function __construct(
        $titulo,
        $descricao,
        $foto,
        $paginaDestino,
        $criador,
        $arquivado
    ) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->foto = $foto;
        $this->paginaDestino = $paginaDestino;
        $this->criador = $criador;
        $this->arquivado = $arquivado;
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

    public function setPaginaDestino($paginaDestino)
    {
        $this->paginaDestino = $paginaDestino;
    }

    public function setCriador($criador)
    {
        $this->criador = $criador;
    }

    public function setArquivado($arquivado)
    {
        $this->arquivado = $arquivado;
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

    public function getPaginaDestino()
    {
        return $this->paginaDestino;
    }

    public function getCriador()
    {
        return $this->criador;
    }

    public function getArquivado()
    {
        return $this->arquivado;
    }
}
