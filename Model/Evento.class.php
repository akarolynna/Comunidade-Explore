<?php
class Evento {
    private $titulo;
    private $localizacao;
    private $dataHoraInicio;
    private $dataHoraTermino;
    private $descricao;
    private $imagens;
    private $maxParticipantes;
    private $arquivado;
    private $categoria;
    private $colaboradores;
    private $inscritos;
    private $criador;

    public function __construct(
        $titulo,
        $localizacao,
        $dataHoraInicio,
        $dataHoraTermino,
        $descricao,
        $imagens,
        $maxParticipantes,
        $colaboradores,
        $categoria,
        $inscritos,
        $criador,
        $arquivado
    ) {
        $this->titulo = $titulo;
        $this->localizacao = $localizacao;
        $this->dataHoraInicio = $dataHoraInicio;
        $this->dataHoraTermino = $dataHoraTermino;
        $this->descricao = $descricao;
        $this->imagens = $imagens;
        $this->maxParticipantes = $maxParticipantes;
        $this->colaboradores = $colaboradores;
        $this->categoria = $categoria;
        $this->inscritos = $inscritos;
        $this->criador = $criador;
        $this->arquivado = $arquivado;
    }

    // Métodos Set
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setImagens($imagens) {
        $this->imagens = $imagens;
    }

    public function setMaxParticipantes($maxParticipantes) {
        $this->maxParticipantes = $maxParticipantes;
    }

    public function setColaboradores($colaboradores) {
        $this->colaboradores = $colaboradores;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setInscritos($inscritos) {
        $this->inscritos = $inscritos;
    }

    public function setCriador($criador) {
        $this->criador = $criador;
    }

    public function setArquivado($arquivado) {
        $this->arquivado = $arquivado;
    }

    // Métodos Get
    public function getDescricao() {
        return $this->descricao;
    }

    public function getImagens() {
        return $this->imagens;
    }

    public function getMaxParticipantes() {
        return $this->maxParticipantes;
    }

    public function getColaboradores() {
        return $this->colaboradores;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getInscritos() {
        return $this->inscritos;
    }

    public function getCriador() {
        return $this->criador;
    }

    public function getArquivado() {
        return $this->arquivado;
    }
    
}
?>