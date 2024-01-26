<?php
class Guia {
    private $nomeDestino;
    private $localizacao;
    private $corPrincipal;
    private $descricao;
    private $clima;
    private $epocaVisita;
    private $culturaHistoria;
    private $areasContribuicao;
    private $desafios;
    private $fotoCapa;
    private $fotosSecundarias;
    private $categorias;
    private $colaboradores;
    private $criador;
    private $publico;
    private $arquivado;

    public function __construct(
        $nomeDestino,
        $localizacao,
        $corPrincipal,
        $descricao,
        $clima,
        $epocaVisita,
        $culturaHistoria,
        $areasContribuicao,
        $desafios,
        $fotoCapa,
        $fotosSecundarias,
        $categorias,
        $colaboradores,
        $criador,
        $publico,
        $arquivado
    ) {
        $this->nomeDestino = $nomeDestino;
        $this->localizacao = $localizacao;
        $this->corPrincipal = $corPrincipal;
        $this->descricao = $descricao;
        $this->clima = $clima;
        $this->epocaVisita = $epocaVisita;
        $this->culturaHistoria = $culturaHistoria;
        $this->areasContribuicao = $areasContribuicao;
        $this->desafios = $desafios;
        $this->fotoCapa = $fotoCapa;
        $this->fotosSecundarias = $fotosSecundarias;
        $this->categorias = $categorias;
        $this->colaboradores = $colaboradores;
        $this->criador = $criador;
        $this->publico = $publico;
        $this->arquivado = $arquivado;
    }

     // Getters
     public function getNomeDestino() {
        return $this->nomeDestino;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function getCorPrincipal() {
        return $this->corPrincipal;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getClima() {
        return $this->clima;
    }

    public function getEpocaVisita() {
        return $this->epocaVisita;
    }

    public function getCulturaHistoria() {
        return $this->culturaHistoria;
    }

    public function getAreasContribuicao() {
        return $this->areasContribuicao;
    }

    public function getDesafios() {
        return $this->desafios;
    }

    public function getFotoCapa() {
        return $this->fotoCapa;
    }

    public function getFotosSecundarias() {
        return $this->fotosSecundarias;
    }

    public function getCategorias() {
        return $this->categorias;
    }

    public function getColaboradores() {
        return $this->colaboradores;
    }

    public function getCriador() {
        return $this->criador;
    }

    public function getPublico() {
        return $this->publico;
    }

    public function getArquivado() {
        return $this->arquivado;
    }

    // Setters
    public function setNomeDestino($nomeDestino) {
        $this->nomeDestino = $nomeDestino;
    }

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function setCorPrincipal($corPrincipal) {
        $this->corPrincipal = $corPrincipal;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setClima($clima) {
        $this->clima = $clima;
    }

    public function setEpocaVisita($epocaVisita) {
        $this->epocaVisita = $epocaVisita;
    }

    public function setCulturaHistoria($culturaHistoria) {
        $this->culturaHistoria = $culturaHistoria;
    }

    public function setAreasContribuicao($areasContribuicao) {
        $this->areasContribuicao = $areasContribuicao;
    }

    public function setDesafios($desafios) {
        $this->desafios = $desafios;
    }

    public function setFotoCapa($fotoCapa) {
        $this->fotoCapa = $fotoCapa;
    }

    public function setFotosSecundarias($fotosSecundarias) {
        $this->fotosSecundarias = $fotosSecundarias;
    }

    public function setCategorias($categorias) {
        $this->categorias = $categorias;
    }

    public function setColaboradores($colaboradores) {
        $this->colaboradores = $colaboradores;
    }

    public function setCriador($criador) {
        $this->criador = $criador;
    }

    public function setPublico($publico) {
        $this->publico = $publico;
    }

    public function setArquivado($arquivado) {
        $this->arquivado = $arquivado;
    }
}
?>
